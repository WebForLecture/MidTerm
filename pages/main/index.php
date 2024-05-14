<div id="main_screen">
    <section id="profile">
        <div class="section_pic-container">
            <img src="img/main_img_with_splash.png" alt="Dzoãn Xuân Thanh profile picture">
        </div>
        <div class="section_text">
            <p class="section_text_p1">Xin chào, tôi là</p>
            <h1 class="title">Dzoãn Xuân Thanh</h1>
            <p class="section_text_p2">
                <span class="multiText"></span>
            </p>
            <div class="btn-container">
                <button class="btn btn-color-2 border">
                    Tin việc làm
                </button>
                <button class="btn btn-color-1">
                    Liên hệ
                </button>
            </div>
        </div>
    </section>
    <!-- Link js of typing word that made animation for title "Dzoan Xuan Thanh"-->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typingEffect = new Typed(".multiText", {
            strings: ["Thạc sĩ Khoa học máy tính", "Giảng viên TDTU"],
            loop: true,
            typeSpeed: 100,
            backSpeed: 80,
            backDelay: 1500,
        })
    </script>
</div>