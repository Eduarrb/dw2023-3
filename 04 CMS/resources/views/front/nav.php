    <nav class="nav">
        <div class="nav__welcome">
            <div class="nav__welcome__container container">
                <div class="nav__welcome__container--msj">
                    Mensaje de saludo
                </div>
                <div class="nav__welcome__container__access">
                    <?php 
                        if(!isset($_SESSION['user_rol'])){
                            ?>
                                <a href="login.php" class="nav__welcome__container__access--account">
                                    <i class="fa-solid fa-user"></i> Iniciar Sesión
                                </a>
                        <?php } else {
                            ?>
                                <a href="#" class="nav__welcome__container__access--account">
                                    <i class="fa-solid fa-user"></i> <?php echo $_SESSION['user_nombres']; ?>
                                </a>
                        <?php }
                    ?>
                    <select class="nav__welcome__container__access--moneda">
                        <option value="USD">USD $</option>
                        <option value="PEN">PEN S/</option>
                    </select>
                    <select class="nav__welcome__container__access--idioma">
                        <option value="us">     
                            English
                        </option>
                        <option value="es">
                            Español
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="nav__menu">
            <div class="nav__menu__container container">
                <img src="img/logo2.png" alt="logo" class="nav__menu__container--logo">
                <a href="#" class="nav__menu__container--iconMenu">
                    <i class="fa-solid fa-bars"></i>
                </a>
                <div class="nav__menu__container__right">
                    <ul class="nav__menu__container__right__box">
                        <li class="nav__menu__container__right__box__item">
                            <a href="./" class="nav__menu__container__right__box__item--link">home</a>
                        </li>
                        <li class="nav__menu__container__right__box__item">
                            <a href="#" class="nav__menu__container__right__box__item--link">shop</a>
                        </li>
                        <li class="nav__menu__container__right__box__item">
                            <a href="#" class="nav__menu__container__right__box__item--link">blog</a>
                        </li>
                        <li class="nav__menu__container__right__box__item">
                            <a href="#" class="nav__menu__container__right__box__item--link">pages</a>
                        </li>
                        <li class="nav__menu__container__right__box__item">
                            <a href="#" class="nav__menu__container__right__box__item--link">contact</a>
                        </li>
                        <li class="nav__menu__container__right__box__item">
                            <a href="#" class="nav__menu__container__right__box__item--link">about us</a>
                        </li>
                        <?php 
                            if(isset($_SESSION['user_rol']) && $_SESSION['user_rol'] == 'admin'){
                                ?>
                                    <li class="nav__menu__container__right__box__item">
                                        <a href="admin" class="nav__menu__container__right__box__item--link">ADMIN</a>
                                    </li>
                            <?php }
                        ?>
                    </ul>
                    <a href="cart.php" class="nav__menu__container__right__cart">
                        <?php $fila = validarCarrito(); ?>
                        <div class="nav__menu__container__right__cart__box">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span><?php echo $fila['canti']; ?></span>
                        </div>
                        <div class="nav__menu__container__right__cart--title">My Cart</div>
                        <div class="nav__menu__container__right__cart--price">
                            S/ <?php echo $fila['total'] ? $fila['total'] : '0.00'; ?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nav__search">
            <div class="nav__search__container container">
                <div class="nav__search__container__category">
                    <i class="fa-solid fa-bars-staggered"></i>
                    <span>shop by categories</span>
                    <i class="fa-solid fa-angle-down"></i>
                </div>
                <div class="nav__search__container__formBox">
                    <form>
                        <input type="text" placeholder="Ingresa palabra clave...">
                        <select name="" id="">
                            <option value="">All Categories</option>
                        </select>
                        <i class="fa-solid fa-angle-down ml-1"></i>
                        <i class="fa-solid fa-magnifying-glass ml-6"></i>
                    </form>
                </div>
                <div class="nav__search__container__phone">
                    <i class="fa-solid fa-phone-volume"></i>
                    <span>(080) 123 4567 890</span>
                </div>
            </div>
        </div>
    </nav>