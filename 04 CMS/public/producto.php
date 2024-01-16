<?php require_once("../resources/config.php"); ?>

<?php include(VIEW_FRONT . DS . "head.php"); ?>
    
    <?php include(VIEW_FRONT . DS . "nav.php"); ?>

    <section class="producto">
        <div class="producto__container container">
            <div class="producto__container__imgBox">
                <img src="img/mando.jpg" alt="">
            </div>
            <div class="producto__container__data">
                <h3 class="producto__container__data__titulo">Janon vista fhd 4k</h3>
                <div class="producto__container__data_stars mt-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="producto__container__data__precio mt-4">
                    S/ 239.90
                </div>
                <div class="producto__container__data__descri mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa ratione id quibusdam rem voluptatem debitis, sit molestiae vero aliquam alias laborum tenetur quasi! Corrupti ipsa ipsam quae corporis qui totam atque! Qui, illo earum.
                </div>
                <form class="producto__container__data__form mt-5">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" value="1">
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
