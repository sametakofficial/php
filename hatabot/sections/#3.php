			<!-- Section 3 -->
			<div class="section-3-container section-container" id="section-3">
				<div class="container">

					<div class="row">
						<div class="col section-3 section-description wow fadeIn">
							<h2>Hata Oluştur</h2>
							<div class="divider-1 wow fadeInUp"><span></span></div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 section-3-box wow fadeInLeft">
							<div class="row">
								<div class="col-md-3">
									<div class="section-3-box-icon">
										<i class="fas fa-paperclip"></i>
									</div>
								</div>
								<div class="col-md-9">
									<h3>Lütfen Çözümlediğiniz Bir Hatayı Hata Havuzuna Ekleyiniz</h3>
									<p>
										Yanlış anahtar kelimeler ve yönergelerle HataBot programından yararlanmak
										isteyen insanların deneyimini aksatmayınız.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 section-3-box wow fadeInLeft">
							<div class="row">
								<div class="col-md-3">
									<div class="section-3-box-icon">
										<i class="fas fa-pencil-alt"></i>
									</div>
								</div>
								<div class="col-md-9">
									<h3>Yazım Kurallarına Özen Gösteriniz</h3>
									<p>
										Yazım kurallarına özen göstermenizi istememizin temel nedeni hata havuzundan
										yararlanmak isteyen kullanıcıların hatalarını kolayca çözebilmelerini
										sağlamaktır.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body p-4 p-md-5">
						<div class="col-md-12 section-3-box wow fadeInLeft">


							<form action="assets/php/process.php" method="post">

								<div class="row">
									<div class="col-md-6 mb-4">

										<div class="form-outline">
											<input type="text" placeholder="Hata başlığını giriniz."id="firstName" name="hata_baslik"class="form-control form-control-lg" />
											<label class="form-label" for="firstName">Hata Başlığı</label>
										</div>

									</div>
									<div class="col-md-6 mb-4">

										<div class="form-outline">
											<input type="text" id="lastName" placeholder="Hata çıktısını giriniz." name="hata_cikti"class="form-control form-control-lg" />
											<label class="form-label" for="lastName">Hata Çıktısı (Temel)</label>
										</div>

									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-4 d-flex align-items-center">

										<div class="form-outline datepicker w-100">
											<textarea  name="hata_aciklama" placeholder="Hata açıklamasını giriniz ve yazım kurallarına dikkat ediniz." class="form-control" id="exampleFormControlTextarea1"
												rows="5"></textarea>
											<label for="birthdayDate" class="form-label">Hatanın Açıklaması</label>
										</div>

									</div>
									<div class="col-md-6 mb-4">

										<h3 class="mb-2 pb-1"><strong>Yazılım Türü: </strong></h3>

										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="hata_turu"
												id="femaleGender" value="Python" checked />
											<label class="form-check-label" for="femaleGender">Python</label>
										</div>

										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="hata_turu"
												id="maleGender" value="Php" />
											<label class="form-check-label" for="maleGender">Php</label>
										</div>

										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="hata_turu"
												id="otherGender" value="C++" />
											<label class="form-check-label" for="otherGender">C++</label>
										</div>

										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="hata_turu"
												id="otherGender" value="Java" />
											<label class="form-check-label" for="otherGender">Java</label>
										</div>

										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="hata_turu"
												id="otherGender" value="JavaScript" />
											<label class="form-check-label" for="otherGender">JavaScript</label>
										</div>

										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="hata_turu"
												id="otherGender" value="Diğer" />
											<label class="form-check-label" for="otherGender">Diğer</label>
										</div>
									</div> <input class="btn btn-danger btn-lg"
										style=" background-color: #f35b3f;width:100%;" type="submit" name="hata_ekle"
										value="Havuza Ekle" />

								</div>
						</div>

						<div class="row">
							<div class="col-12">






							</div>




							</form>
						</div>


					</div>
				</div>
			</div>