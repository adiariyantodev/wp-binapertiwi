<?php

add_action( 'admin_notices', 'warn_if_breakdance_is_disabled' );

function warn_if_breakdance_is_disabled() {
    if (defined('__BREAKDANCE_DIR__')){
        return;
    }

    ?>
    <div class="notice notice-error is-dismissible">
        <p>You're using Breakdance's Zero Theme but Breakdance is not enabled. This isn't supported.</p>
    </div>
    <?php
}
// Menambahkan dropdown filter berdasarkan tiga taxonomy (brand, unit, part) di halaman admin
function add_combined_taxonomy_filter_to_admin($post_type) {
    if ($post_type == 'product') {
        // Gabungkan 3 taxonomy dalam satu dropdown
        $taxonomies = array('brand', 'unit', 'part'); // Daftar taxonomy yang digabungkan
        echo '<div id="combined_taxonomy_filter" style="display: inline-block;">'; // Memastikan dropdown tetap dalam satu baris

        // Looping untuk menampilkan 3 taxonomy dalam kolom
        foreach ($taxonomies as $taxonomy) {
            $terms = get_terms(array(
                'taxonomy' => $taxonomy,
                'orderby'  => 'name',
                'hide_empty' => false, // Menampilkan semua kategori meskipun tidak ada posting
            ));

            if (!empty($terms) && !is_wp_error($terms)) {
                // Menampilkan kategori di dalam kolom
                echo '<select name="combined_taxonomy_filter_' . $taxonomy . '" class="postform" style="width: 200px; display: inline-block; margin-right: 10px;">';
                echo '<option value="">Filter ' . ucfirst($taxonomy) . '</option>'; // Pilihan "Semua"

                // Menambahkan opsi untuk memilih "Semua" produk dari taxonomy tersebut
                echo '<option value="all_' . $taxonomy . '">Semua ' . ucfirst($taxonomy) . '</option>'; // Menampilkan "Semua" untuk taxonomy ini

                foreach ($terms as $term) {
                    // Menampilkan kategori dengan jumlah post
                    $term_count = $term->count;
                    echo '<option value="' . $term->term_id . '">' . $term->name . ' (' . $term_count . ')</option>';
                }

                echo '</select>';
            }
        }

        echo '</div>';
    }
}
add_action('restrict_manage_posts', 'add_combined_taxonomy_filter_to_admin');

// Memfilter query berdasarkan kategori yang dipilih dalam satu filter
function filter_posts_by_combined_taxonomy($query) {
    global $pagenow;

    if ($pagenow == 'edit.php' && isset($_GET['post_type']) && $_GET['post_type'] == 'product') {
        // Memeriksa apakah filter kategori dipilih di salah satu taxonomy
        $taxonomies = array('brand', 'unit', 'part');
        
        // Menambahkan tax_query berdasarkan filter yang dipilih
        $tax_query = array('relation' => 'OR'); // Gunakan 'OR' jika ingin mencari postingan dengan salah satu term
        foreach ($taxonomies as $taxonomy) {
            if (isset($_GET['combined_taxonomy_filter_' . $taxonomy]) && $_GET['combined_taxonomy_filter_' . $taxonomy] != '') {
                $filter_value = $_GET['combined_taxonomy_filter_' . $taxonomy];

                // Memeriksa apakah memilih "Semua [taxonomy]"
                if ($filter_value === 'all_' . $taxonomy) {
                    // Jika "Semua" dipilih, tampilkan semua produk dari taxonomy tersebut
                    $terms = get_terms(array(
                        'taxonomy' => $taxonomy,
                        'orderby'  => 'name',
                        'hide_empty' => false,
                    ));

                    $term_ids = array();
                    foreach ($terms as $term) {
                        $term_ids[] = $term->term_id;
                    }

                    // Menambahkan filter untuk semua produk di taxonomy tersebut
                    $tax_query[] = array(
                        'taxonomy' => $taxonomy,
                        'field'    => 'id',
                        'terms'    => $term_ids,
                        'operator' => 'IN',
                    );
                } else {
                    // Menambahkan filter untuk kategori yang dipilih
                    $tax_query[] = array(
                        'taxonomy' => $taxonomy,
                        'field'    => 'id',
                        'terms'    => $filter_value,
                        'operator' => 'IN',
                    );
                }
            }
        }

        // Hanya menambahkan tax_query jika ada filter yang dipilih
        if (count($tax_query) > 1) {
            $query->query_vars['tax_query'] = $tax_query;
        }
    }
}
add_filter('parse_query', 'filter_posts_by_combined_taxonomy');
