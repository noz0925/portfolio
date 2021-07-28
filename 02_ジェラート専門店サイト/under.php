    <!-- 店名 -->
    <div class="store_name">
        <p class="t_font">TOKYO GELATO</p>
    </div>

    <!-- パンくず -->
    <?php if(function_exists('bcn_display_list')): ?>
        <div class="bread">
            <div class="inner">
                <ul>
                    <?php bcn_display_list(); //パンくずリストのプラグイン ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <?php if(is_home()): ?>
        <!-- サブタイトル -->
        <div class="menu_title">
            <div class="inner">
                <h1 class="t_font">
                    menu
                </h1>
            </div>
        </div>
    <?php endif; ?>