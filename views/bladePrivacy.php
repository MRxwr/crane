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
        <div class="col-md-12 p-5">
            <div class="row">
                <div class="col-12 <?php echo direction("","text-right") ?>">
                    <h1><?php echo direction("Privacy & Policy","سياسة الخصوصية") ?></h1>
                    <h5 style="font-weight:400"><?php echo direction($settings[0]["enPolicy"],$settings[0]["arPolicy"]) ?></h5>
                </div>
                <?php require_once("template/apps.php") ?>
            </div>
        </div>
    </div>
    </div>
</div>