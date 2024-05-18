<div class="rightContent sides">
    <div class="rightContentBg"></div>
    <div class="rightContentDivs">
    <div class="row m-0">
        <div id="menuBtn" class='w-100'>
            <div class="row w-100" >
            <div class="col-10 text-left" >
                <div class="col-12 text-left" style="font-size:50px;font-weight:600">Crane<span class="craneDot">.</span></div>
            </div>
            <div class="col-2 text-right" style="align-content: center;">
                <svg data-toggle="modal" data-target="#fullscreenModal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="fill:white;width:25px;height:25px"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
            </div>
            </div>
        </div>
        <div class="col-md-6 p-5">
            <div class="row">
                <div class="col-12">
                    <h1>Request a service with Crane</h1>

                    <?php
                    $english = "Crane is a leading company specializing in car carriers and vehicle transportation services in Kuwait. Our journey began with a vision to revolutionize the car transportation industry by providing exceptional services tailored to the needs of car owners and car crane operators.
                    we set out to create a seamless and reliable solution. to providing unparalleled services in the realm of car transportation, leveraging our expertise in operating specialized car carriers. Our focus extends to serving both car owners and crane operators, ensuring a seamless experience for all involved.
                    At Crane, we pride ourselves on our commitment to excellence and customer satisfaction. Our team of experienced professionals is dedicated to delivering top-notch services, ensuring the safe and efficient transportation of vehicles across Kuwait.
                    
                    Driven by innovation and a passion for excellence, we strive to be the preferred choice for car owners and car crane  operators alike. Our goal is to expand our presence across Kuwait, establishing Crane as the go-to destination for all car transportation needs.
                    
                    Experience the Crane difference where quality meets reliability, and excellence is our standard.
                    Join us on our journey as we redefine the car transportation experience in Kuwait and beyond.
                    ";
                    $arabic = "كرين هي شركة رائدة متخصصة في خدمات نقل السيارات في الكويت. نشأتنا من شغفنا بالتميز في مجال حاملات السيارات والرغبة في تلبية الاحتياجات الفريدة لأصحاب السيارات ومشغلي الرافعات .

                    سعينا لخلق حلاً سلسًا وموثوقًا، لتقديم خدمات لا مثيل لها في مجال نقل السيارات، والاستفادة من خبرتنا في تشغيل ناقلات السيارات المتخصصة. ويمتد تركيزنا إلى خدمة كل من مالكي السيارات ومشغلي الرافعات، مما يضمن تجربة سلسة لجميع المشاركين.
                    
                    في كرين، نفتخر بالتزامنا بالتميز ورضا العملاء. يعمل فريقنا المؤهل من المحترفين على تقديم خدمات متميزة، ضمانًا لنقل السيارات بأمان وكفاءة في جميع أنحاء الكويت.
                    
                    انطلاقًا من الابتكار والشغف بالتميز، فإننا نسعى جاهدين لنكون الخيار المفضل لأصحاب السيارات ومشغلي رافعات السيارات على حدٍ سواء. هدفنا هو توسيع وجودنا في جميع أنحاء الكويت، وجعل كرين الوجهة المفضلة لجميع احتياجات نقل السيارات.
                    
                    اكتشف الفرق بين الرافعات - حيث تلتقي الجودة بالموثوقية، والتميز هو معيارنا. انضم إلينا في رحلتنا حيث نعيد تعريف تجربة نقل السيارات في الكويت وخارجها.
                    ";

                    $details = direction($english,$arabic);
                    ?>

                    <h5 style="font-weight:400"><?php echo $details ?></h5>
                </div>
                <div class="col-xl-6 p-3">
                    <button type="button" class="btn btn-outline-light w-100"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="fill:white;height:25px;width:25px"><path d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"/></svg> Google Play</button>
                </div>
                <div class="col-xl-6 p-3">
                    <button type="button" class="btn btn-outline-light w-100"><svg xmlns="http://www.w3.org/2000/svg" style="fill:white;height:25px;width:25px" viewBox="0 0 384 512"><path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z"/></svg> AppStore</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-5">
            <img src="img/home.jpg" class="rounded" style="width: 100%;">
        </div>
    </div>
    </div>
</div>