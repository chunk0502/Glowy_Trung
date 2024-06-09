<div class="footer">
        <div class="midFooter">
            <div class="infoFooter">
                <h4>Glowy ?</h4>
                <p>Glowy mang hơi hướng Indie Aesthetic / Indie Vibes – một tư duy thẩm mĩ theo chủ nghĩa cá nhân & tự chủ.</p>
                <br>
                <br>
                <b>Thông tin chuyển khoản</b>
                <br>
                <p>Ngân Hàng TP Bank
                <br>
                    STK : 0784 7181 87
                <br>
                    Chủ TK : Pham Dang Ngoc Chau
                <br>    
                    Khi chuyển khoản các bạn ghi số điện thoại của mình tại thông tin chuyển khoản để đơn hàng được xử lý nhanh chóng nhé!</p>
            </div>
            <div class="contactFooter">
                <h4>LIÊN HỆ VỚI CHÚNG TÔI</h4>
                <p>26 Pham Phu Thu</p>
                <p>0784718187</p>
                <p>chauphm243@gmail.com</p>
                <i class="ri-facebook-circle-fill"></i>
                <i class="ri-instagram-fill"></i>
            </div>
        </div>
    </div>
    <div class="copyRightFooter">
        <p class="ri-copyright-line">Bản quyền thuộc về <b>Glowy</b></p>
    </div>

        <div class="modal">
            <ul class="sub-menu">
                <div class="sub-first-menu">
                    <div class="first-1-menu">
                        <a class="logo-menu" href="#">
                            <img src="./assets/img/img_logo/logo-menuCCC.png" alt="">
                        </a>
                        <div class="arrow-left">
                            <button class="close-menu">
                                <i style="font-size: 24px;"class="ri-arrow-left-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="first-2-menu">
                        <div class="sign-in">
                            <a href="login.php">Đăng nhập</a>
                        </div>
                        <div class="register">
                            <a href="register.php">Đăng ký</a>
                        </div>
                    </div>
                </div>
                <li><a href="index.php" class="menu-list">HOME</a></li>
                <li>
                    <a href="index.php" class="menu-list">SHOP</a>
                    <i class="ri-arrow-down-s-line btnOpen-shop"></i>
                    <i class="ri-arrow-up-s-line btnClose-shop"></i>
                    <div class="list-shop">
                        <ul>
                            <?php
                                $listCategory = getAll_category();
                                foreach($listCategory as $category){
                                        echo '<li><a href="index.php?act='.$category['name'].'&id='.$category['id'].'">'.$category['name'].'</a></li>';
                                    }
                            ?>
                        </ul>
                    </div>
                </li>
                <li><a href="index.php" class="menu-list">ABOUT</a></li>
                <li><a href="index.php" class="menu-list">POLICY</a></li>
                <li><a href="index.php" class="menu-list">CONTACT</a></li>
            </ul>
        </div>
        <div class="modal2">
            <div class="modal-input">
                <input type="text" class="modal-search"placeholder="Bạn muốn tìm kiếm gì ?">
                <div class="btn-search-line">
                    <i class="ri-search-2-line"></i>
                </div>
                <div class="btn-close-search">
                    <i class="ri-close-line"></i>
                </div>
            </div>
        </div>

        <script>
            const btnMenu = document.querySelector('.btn-menu')
            const modal = document.querySelector('.modal')
            const arrowLeft = document.querySelector('.arrow-left')
            const subMenu = document.querySelector('.sub-menu')

            btnMenu.addEventListener('click', openMenu)
            function openMenu() {
                modal.classList.add('open')
            }
            
            arrowLeft.addEventListener('click', closeMenu)
            function closeMenu() {
                modal.classList.remove('open')
            } 

            modal.addEventListener('click',closeMenu)

            subMenu.addEventListener('click',function(event){
                event.stopImmediatePropagation()
            })

        </script>
        <script>
            const openSearch = document.querySelector('.js-search')
            const modal2 = document.querySelector('.modal2')
            const btnCloseSearch = document.querySelector('.btn-close-search')
            const modalInput = document.querySelector('.modal-input')

            openSearch.addEventListener('click',openSearchLine)
            function openSearchLine(){
                modal2.classList.add('open')
            }
            btnCloseSearch.addEventListener('click',closeSearch)
            function closeSearch(){
                modal2.classList.remove('open')
            }
            modal2.addEventListener('click',closeSearch)
            modalInput.addEventListener('click',function(event){
                event.stopImmediatePropagation()
            })
        </script>

        <script>
            const openListShop = document.querySelector('.btnOpen-shop')
            const listShop = document.querySelector('.list-shop')
            const closeListShop = document.querySelector('.btnClose-shop')

            openListShop.addEventListener('click',openList)
            function openList(){
                listShop.classList.add('open')
                openListShop.classList.add('change')
                closeListShop.classList.add('open')
            }

            closeListShop.addEventListener('click',closeList)
            function closeList(){
                listShop.classList.remove('open')
                openListShop.classList.remove('change')
                closeListShop.classList.remove('open')
            }
        </script>
        
</body>

</html>