<div class="col-3">
    <div class="pf_left">
        <?php
        $action = isset($_GET['action']) ? $_GET['action'] : ''; // Kiểm tra và gán giá trị của biến action

        // Hàm kiểm tra lớp active
        function isActive($getAction, $currentAction)
        {
            if ($getAction === $currentAction) {
                echo "active";
            }
        }
        ?>
        <ul>
            <li><a href="./index.php?action=account">
                    <div class="profile_menu <?php isActive($action, "account"); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <p>Tài khoản</p>
                    </div>
                </a></li>
            <li><a href="./index.php?action=order">
                    <div class="profile_menu   <?php isActive($action, "order"); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>
                        <p>Lịch sử đơn Hàng</p>
                    </div>
                </a></li>
            <li><a href="./index.php?action=resetpass">
                    <div class="profile_menu   <?php isActive($action, "resetpass"); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
                            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                        </svg>
                        <p>Đổi mật khẩu</p>
                    </div>
                </a></li>
            <li><a href="./index.php?action=comment">
                    <div class="profile_menu  <?php isActive($action, "comment"); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                            <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        </svg>
                        <p>Bình luận của tôi</p>
                    </div>
                </a></li>
            <li><a href="./index.php?action=wishlist">
                    <div class="profile_menu  <?php isActive($action, "wishlist"); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                            <path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
                        </svg>
                        <p>Sản Phẩm yêu thích</p>
                    </div>
                </a></li>
        </ul>
    </div>
</div>