
<div class="modal fade" id="fullscreenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-full" role="document">
			<div class="modal-content">
				<div class="modal-body" style="background-color:black;">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" style="color: white;">&times;</span>
					</button>
					<div class="sides">
						<div class="row">
							<div class="col-12 pt-3 pb-3 text-center" style="font-size:50px;font-weight:600">Crane<span class="craneDot">.</span></div>
							<div class="col-3"></div>
							<div class="col-9">
							<ul>
								<li id="home"><a href="?s=Home" alt="Crane. Home"><?php echo direction("Home","الرئيسية") ?></a></li>
								<li id="how"><a href="?s=How" alt="How Crane. Works"><?php echo direction("How it works","كيف نعمل") ?></a></li>
								<li id="services"><a href="?s=Services" alt="Crane. Services"><?php echo direction("Services","خدامتنا") ?></a></li>
								<li id="contact"><a href="?s=Contact" alt="Contact Crane."><?php echo direction("Contact","تواصل معنا") ?></a></li>
								<li id="contact"><a href="?s=About" alt="About Crane."><?php echo direction("About us","من نحن") ?></a></li>
								<li id="privacy"><a href="?s=Privacy" alt="Crane. Privacy Policy"><?php echo direction("Privacy & Policy","سياسة الخصوصية") ?></a></li>
								</ul>
							</div>
							<div class="col-12 text-center"><a href="?s=Join" alt="Join Crane."><label class='joinBtn p-2' id="join" ><?php echo direction("Join Crane","إلتحق بكرين") ?><label></a></div>
							<div class="col-12 text-center p-4">
								<div class="row m-0">
									<div class="col-6">
										<div class="lang" id="english"><a href="?Lang=EN">English</a></div>
									</div>
									<div class="col-6">
										<div class="lang" id="arabic"><a href="?Lang=AR">العربية</a></div>
									</div>
								</div>
							</div>
							<div class="col-12 text-center p-4">
								<div class="row m-0">
								<div class="col-4">
                    <a href="<?php echo $socialMedia[0]["facebook"] ?>" target="_blank" title="crane-facebook"><svg class='socialMediaIcon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg></a>
                </div>
                <div class="col-4">
                    <a href="https://www.instagram.com/<?php echo $socialMedia[0]["instagram"] ?>/" target="_blank" title="crane-instagram"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class='socialMediaIcon'><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                </div>
                <div class="col-4">
                    <a href="https://www.youtube.com/@<?php echo $socialMedia[0]["youtube"] ?>" target='_blank' title="crane-youtube"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class='socialMediaIcon'><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg></a>
                </div>
								</div>
							</div>
							<div class="col-12 text-center pb-5">
								<a href="https://createkuwait.com" target="_blank" class="btn btn-outline-secondary" style="width:90%">Made with <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="fill:red;width:20px;height:20px"><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg> by Create.</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>