<?php
//パンくずリスト
function the_breadcrumbs(){
  global $post;
  $results = '';
  // ターム情報生成
  $taxonomy = get_post_taxonomies( $post );
  $term     = get_the_terms( $post, $taxonomy[0] );
  // 変数に格納
  $results .=
  '
  <ol class="c-breadcrumbs-list">
    <li class="c-breadcrumbs-list-item c-breadcrumbs-list-item-home">
      <a href="'.home_url( '/' ).'" class="c-breadcrumbs-list-item-link">
        TOP
      </a>
    </li>
  ';
  // アーカイブの場合
  if( is_archive() ){
    $results .=
    '
    <li class="c-breadcrumbs-list-item c-breadcrumbs-list-item-current">
      '.get_the_archive_title().'
    </li>
    ';
  }
  // 投稿の場合
  else if( is_single() ){
    if( $term ){
      $results .=
      '
      <li class="c-breadcrumbs-list-item">
        <a href="'.get_term_link( $term[0], $taxonomy[0] ).'" class="c-breadcrumbs-list-item-link">
          '.$term[0]->name.'
        </a>
      </li>
      ';
    }
    $results .=
    '
    <li class="c-breadcrumbs-list-item c-breadcrumbs-list-item-current">
      '.get_the_title( $post ).'
    </li>
    ';
  }
  // ページの場合
  else if( is_page() ){
    // 親ページがある場合祖先から階層出力
    if( $post->post_parent != 0 ){
      $ancestors = array_reverse( $post->ancestors );
      foreach( $ancestors as $ancestor ){
        $results .=
        '
        <li class="c-breadcrumbs-list-item">
          <a href="'.get_permalink( $ancestor ).'" class="c-breadcrumbs-list-item-link">
            '.get_the_title( $ancestor ).'
          </a>
        </li>';
      }
    }
    $results .=
    '
    <li class="c-breadcrumbs-list-item c-breadcrumbs-list-item-current">
      '.get_the_title( $post ).'
    </li>
    ';
  }
  // 404の場合
  else if( is_404() ){
    $results .=
    '
    <li class="c-breadcrumbs-list-item c-breadcrumbs-list-item-current">
      404 Not Found
    </li>
    ';
  }
  // 検索結果の場合
  else if( is_search() ){
    $results .=
    '
    <li class="c-breadcrumbs-list-item c-breadcrumbs-list-item-current">
      '.'"'.get_search_query().'"の検索結果
    </li>
    ';
  }
  $results .= '</ol>';
  // 出力
  echo $results;
}