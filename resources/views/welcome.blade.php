
@extends('layouts.app')

@section('content2')

<div class="home_banner_area  pt-4">


		<div class="banner_inner">
			<div class="container">
				<div class="banner_content ">
					<h2>
						إنماء أطفالك 
						من خلال تحقيق <br>
						التشخيص الأكثر ذكاءً 
					</h2>
					<p>
						.....يمكنك الأن بدء التشخيص الأمراض 
					</p>
					<a class="primary-btn text-uppercase" href="/home">أعرف المزيد</a>
				</div>
			</div>
        </div>
</div>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Features Area =================-->
	<div class="features_area section_gap">
		<div class="container">
			<div class="row">
				<!-- single feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single_feature">
						<div class="feature_head">
							<img src="{{asset('assets/img/features/icon1.png')}}" alt="">
							<h4>خدمات طارئه</h4>
						</div>
						<div class="feature_content">
							<p>
                                
                            يمكنك إرسال تشخيص المرض لطبيبك إذا تطلب الأمر لطبيبك
                            </p>
							
						</div>
					</div>
				</div>
				<!-- single feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single_feature">
						<div class="feature_head">
							<img src="{{asset('assets/img/features/icon2.png')}}" alt="dmdlkm">
							<h4>معلومات عامه</h4>
						</div>
						<div class="feature_content">
							<p>
                                
                            يمكنك قراءة مقالات عن الصحه العامه والأمراض
                            </p>
							<div class="feature_btn">
								<a href="{{url('/post')}}" class="f_btn">معرفة المزيد</a>
							</div>
						</div>
					</div>
				</div>
				<!-- single feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single_feature">
						<div class="feature_head">
							<img src="{{asset('assets/img/features/icon3.png')}}" alt="">
							<h4>عرض معلومات أطباء</h4>
						</div>
						<div class="feature_content">
							<p>
                            يمكنك رؤية معلومات طبيب للتواصل معه

                            </p>
							<div class="feature_btn">
								<a href="#" class="f_btn">زيارة ملف الأطباء</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
	<!--================ End Features Area =================-->

	<!--================ Start About Area =================-->
	<section class="about_area lite_bg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-5">
					<div class="about_details lite_bg">
						<h2>أهلا بك في مستشارك الطبي</h2>
						<p class="text-right">
                            
                        اتخذ الخطوة الأولى وشاهد ما يمكن أن يسبب الأعراض. ثم تعرف على الخطوات القادمة المحتملة.
                        </p>
						<ul class="list_wrap">
							<li class="about_lists">
                            التوازن بين العلاج الطبيعي

                            </li>
							<li class="about_lists">
                            تحسين صحة الجهاز الهضمي

                            </li>
							<li class="about_lists">
                            خدمات الصحة العقلية

                            </li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1">
					<div class="about_right overlay">
						<div class="about_inner">
							<h4 style="line-height:1.5rem;">تعاني من الأعراض ولكن لست متأكدا ما تعنيه؟ استخدم Symptom Checker للمساعدة في تحديد الأسباب والعلاجات المحتملة ، ومتى يمكن رؤية الطبيب.</h4>
                        
                            <a class="primary-btn text-uppercase" href="/home">أعرف المزيد</a>
                        </div>

					</div>
				</div>
			</div>
			<div class="about_bg overlay"></div>
		</div>
	</section>
	<!--================ End About Area =================-->

	<!--================ Start Department Area =================-->
	<section class="department_area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="main_title">
						<h2>  أجزاء الجسم</h2>
						<p>
أجزاء التشخيص الموجوده بمستشارك الطبي

                        </p>
					</div>
				</div>
			</div>

			<div class="row">
                <!-- single department -->

                @foreach($symptomss as $symptom)

<div class="col-lg-2 text-center col-sm-6">
    <div class="single_department">
        <div class="dpmt-thumb">

<h4>{{$symptom->tag}}</h4>
       
            
        </div>
    </div>
</div>


@endforeach

				<!-- single department -->
				
				<a class="primary-btn text-uppercase" href="{{url('/home')}}">إعرف المزيد</a>
			</div>
		</div>
	</section>
	<!--================ End Department Area =================-->

	<!--================ Start Counter Area =================-->
	<section class="section_gap counter_area overlay">
		<div class="container">
			<div class="row">
				<!--single-counter-->
				<div class="col-lg-3 col-sm-6">
					<div class="single_counter">
						<h1> <span class="counter_number">30</span></h1>
						<p>عام <br> من الخبره</p>
					</div>
				</div>
				<!--single-counter-->
				<div class="col-lg-3 col-sm-6">
					<div class="single_counter">
						<h1> <span class="counter_number">100</span>%</h1>
						<p>تشخيص <br>  فوري </p>
					</div>
				</div>
				<!--single-counter-->
				<div class="col-lg-3 col-sm-6">
					<div class="single_counter">
						<h1> <span class="counter_number">99</span>%</h1>
						<p> ضمان معرفة <br> التشخيص</p>
					</div>
				</div>
				<!--single-counter-->
				<div class="col-lg-3 col-sm-6">
					<div class="single_counter">
						<h1> <span class="counter_number">20</span>K+</h1>
						<p>أطباء <br> متميزين</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ Start Counter Area =================-->

	<!--================ Start Team Area =================-->
	
	<!--================ End Team Area =================-->

	<!--================ Start Blog Area =================-->
	<section class="section_gap blog_area">
		<div class="container">
			<div class="row">
				<!-- recent blog -->
				<div class="col-lg-6">
					<div class="recent_blog">
						<div class="blog_title">
							<h2>زيارة مقالاتنا الطبيه</h2>
							<p>

                            تقارير Healthline News حول الأبحاث الناشئة ، والعلاجات الجديدة ، والنظام الغذائي ، والتمارين ، والمواضيع الشائعة في الصحة والعافية. تتم كتابة جميع المقالات من خلال شبكة المحررين والمساهمين. كل شيء نقوم بنشره يتم فحصه من قبل لجنة الخبراء لدينا.                            </p>
						</div>
					</div>
					<div class="row">
                        <!-- single-blog -->
                        @foreach($posts as $post)

						<div class="col-lg-12 col-sm-12">
							<div class="single_blog">
                            <a style="color:black;" href="{{url('/post/show'.'/'.$post->id)}}">

								<div class="row align-items-center">

									<div class="col-lg-4 col-md-3">
										<div class="blog_thumb">

											<img class="img-fluid" src="{{asset('/assets/images/posts'.'/'.$post->image)}}" alt="">
                                        
                                        </div>
									</div>
									<div class="col-lg-8 col-md-8">
										<div class="blog_details">
											<div class="blog_meta">
                                                <span><i class="fa fa-calendar"></i>

                                                قسم: {{$post->posttag}}
												
											</div>
											<h4>
                                            {{$post->title}}
											</h4>
											<p>
                                            ......{{  substr($post->postdescription, 0,50)}}
                                            
                                            </p>
										</div>
									</div>
                                </div>

                            </div>
</a>
                        </div>
                        @endforeach

						<!-- single-blog -->
						
					</div>
				</div>

				<!-- appoinment area -->
				<div class="col-lg-6">
					<div class="recent_blog appoinment">
						<div class="blog_title">
							<h2>التواصل معنا</h2>
							
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="appoinment_form_section lite_bg">
								<div class="row">
									<div class="col-lg-12 form_group">
										</div>
									<div class="col-lg-12 text-center">
                                        <a href="{{url('/contact')}}">
										<button  class="primary-btn text-uppercase">confirm booking</button>
                                        </a>
                                    </div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Blog Area =================-->




















@endsection