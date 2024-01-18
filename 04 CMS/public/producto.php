<?php require_once("../resources/config.php"); ?>

<?php include(VIEW_FRONT . DS . "head.php"); ?>
    
    <?php include(VIEW_FRONT . DS . "nav.php"); ?>

    <section class="producto">
        <div class="producto__container container">
            <?php $item = getProductoLand(); ?>
            <div class="producto__container__imgBox">
                <img src="img/<?php echo $item['prod_img']; ?>" alt="<?php echo $item['prod_nombre']; ?>">
            </div>
            <div class="producto__container__data">
                <h3 class="producto__container__data__titulo">
                    <?php echo $item['prod_nombre']; ?>
                </h3>
                <div class="producto__container__data_stars mt-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="producto__container__data__precio mt-4">
                    S/ <?php echo $item['prod_precio']; ?>
                </div>
                <div class="producto__container__data__descri mt-4">
                   <?php echo $item['prod_descri']; ?>
                </div>
                <form class="producto__container__data__form mt-5">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" value="1" min="1" max="<?php echo $item['prod_canti']; ?>">
                    <input type="submit" value="Agregar a carrito">
                </form>
            </div>
        </div>
    </section>
    <section class="comentarios">
        <div class="comentarios__container container">
            <h2 class="comentarios__container__titulo">
                Comentarios
            </h2>
            <form action="" class="comentarios__container__form mt-2">
                <div class="comentarios__container__form__group">
                    <textarea name="" id="" cols="30" rows="3" placeholder="Deja tu comentario"></textarea>
                </div>
                <div class="comentarios__container__form__group">
                    <label for="">Puntaje</label>
                    <input type="number" name="" id="" min="1" max="5" value="1">
                </div>
                <div class="comentarios__container__form__group text-right">
                    <input type="submit" value="Enviar">
                </div>
            </form>
            <div class="comentarios__container__box">
                <div class="comentarios__container__box__item">
                    <div class="comentarios__container__box__item__imgBox">
                        <img src="img/user.png" alt="">
                    </div>
                    <div class="comentarios__container__box__item__data">
                        <div class="comentarios__container__box__item__data__top">
                            <span>John Smith</span>
                            <span>3 ene 2060</span>
                        </div>
                        <p class="comentarios__container__box__item__data__descri mt-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed omnis quos consequatur similique, cum repudiandae aliquid ut illum dolore magnam perferendis fugit maxime suscipit atque, laudantium nihil voluptates quaerat quasi necessitatibus minima blanditiis porro.
                        </p>
                        <div class="comentarios__container__box__item__data__stars mt-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="comentarios__container__box__item">
                    <div class="comentarios__container__box__item__imgBox">
                        <img src="img/user.png" alt="">
                    </div>
                    <div class="comentarios__container__box__item__data">
                        <div class="comentarios__container__box__item__data__top">
                            <span>John Smith</span>
                            <span>3 ene 2060</span>
                        </div>
                        <p class="comentarios__container__box__item__data__descri mt-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed omnis quos consequatur similique, cum repudiandae aliquid ut illum dolore magnam perferendis fugit maxime suscipit atque, laudantium nihil voluptates quaerat quasi necessitatibus minima blanditiis porro.
                        </p>
                        <div class="comentarios__container__box__item__data__stars mt-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="comentarios__container__box__item">
                    <div class="comentarios__container__box__item__imgBox">
                        <img src="img/user.png" alt="">
                    </div>
                    <div class="comentarios__container__box__item__data">
                        <div class="comentarios__container__box__item__data__top">
                            <span>John Smith</span>
                            <span>3 ene 2060</span>
                        </div>
                        <p class="comentarios__container__box__item__data__descri mt-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed omnis quos consequatur similique, cum repudiandae aliquid ut illum dolore magnam perferendis fugit maxime suscipit atque, laudantium nihil voluptates quaerat quasi necessitatibus minima blanditiis porro.
                        </p>
                        <div class="comentarios__container__box__item__data__stars mt-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="comentarios__container__box__item">
                    <div class="comentarios__container__box__item__imgBox">
                        <img src="img/user.png" alt="">
                    </div>
                    <div class="comentarios__container__box__item__data">
                        <div class="comentarios__container__box__item__data__top">
                            <span>John Smith</span>
                            <span>3 ene 2060</span>
                        </div>
                        <p class="comentarios__container__box__item__data__descri mt-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed omnis quos consequatur similique, cum repudiandae aliquid ut illum dolore magnam perferendis fugit maxime suscipit atque, laudantium nihil voluptates quaerat quasi necessitatibus minima blanditiis porro.
                        </p>
                        <div class="comentarios__container__box__item__data__stars mt-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="comentarios__container__box__item">
                    <div class="comentarios__container__box__item__imgBox">
                        <img src="img/user.png" alt="">
                    </div>
                    <div class="comentarios__container__box__item__data">
                        <div class="comentarios__container__box__item__data__top">
                            <span>John Smith</span>
                            <span>3 ene 2060</span>
                        </div>
                        <p class="comentarios__container__box__item__data__descri mt-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed omnis quos consequatur similique, cum repudiandae aliquid ut illum dolore magnam perferendis fugit maxime suscipit atque, laudantium nihil voluptates quaerat quasi necessitatibus minima blanditiis porro.
                        </p>
                        <div class="comentarios__container__box__item__data__stars mt-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="comentarios__container__box__item">
                    <div class="comentarios__container__box__item__imgBox">
                        <img src="img/user.png" alt="">
                    </div>
                    <div class="comentarios__container__box__item__data">
                        <div class="comentarios__container__box__item__data__top">
                            <span>John Smith</span>
                            <span>3 ene 2060</span>
                        </div>
                        <p class="comentarios__container__box__item__data__descri mt-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed omnis quos consequatur similique, cum repudiandae aliquid ut illum dolore magnam perferendis fugit maxime suscipit atque, laudantium nihil voluptates quaerat quasi necessitatibus minima blanditiis porro.
                        </p>
                        <div class="comentarios__container__box__item__data__stars mt-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="comentarios__container__box__item">
                    <div class="comentarios__container__box__item__imgBox">
                        <img src="img/user.png" alt="">
                    </div>
                    <div class="comentarios__container__box__item__data">
                        <div class="comentarios__container__box__item__data__top">
                            <span>John Smith</span>
                            <span>3 ene 2060</span>
                        </div>
                        <p class="comentarios__container__box__item__data__descri mt-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed omnis quos consequatur similique, cum repudiandae aliquid ut illum dolore magnam perferendis fugit maxime suscipit atque, laudantium nihil voluptates quaerat quasi necessitatibus minima blanditiis porro.
                        </p>
                        <div class="comentarios__container__box__item__data__stars mt-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include(VIEW_FRONT . DS . "footer.php"); ?>
