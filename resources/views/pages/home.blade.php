<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Beranda - Taaruf App</title>
		<link
			href="https://fonts.googleapis.com/css?family=Heebo:400,400i,500,700|Titillium+Web:600"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="/dist/css/style.css" />
		<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	</head>
	<body class="is-boxed">
		<div class="body-wrap boxed-container">
			<header class="site-header">
				<div class="container">
					<div class="site-header-inner">
						<div class="brand header-brand">
							<h1 class="m-0">
								<img src="/images/logo-wahdah.png" alt="" width="70" />
							</h1>
						</div>
					</div>
				</div>
			</header>

			<main>
				<section class="hero">
					<div class="container">
						<div class="hero-inner">
							<div class="hero-copy">
								<p
									class="hero-paragraph is-revealing"
									style="margin-bottom: 0px"
								>
									Assalamualaikum Wr.Wb, Ahlan wa sahlan
								</p>
								<h1 class="hero-title mt-0 is-revealing">
									Jemput pasangan hidupmu dengan cara yang
									diridhoi Nya!
								</h1>
								<p class="hero-paragraph is-revealing">
									Cari dan temukan calon pasangan hidup anda
									disini.
								</p>
								<div
									class="hero-form field field-grouped is-revealing"
								>
									<div class="control">
										<a
											class="button button-primary button-block"
											href="{{ route('login') }}"
											>Mulai Cari Calon</a
										>
									</div>
								</div>
							</div>
							<div class="hero-illustration">
								<div style="display: none" class="hero-bg">
									<svg
										width="720"
										height="635"
										xmlns="http://www.w3.org/2000/svg"
									>
										<defs>
											<linearGradient
												x1="50%"
												y1="0%"
												x2="50%"
												y2="97.738%"
												id="a"
											>
												<stop
													stop-color="#151616"
													offset="0%"
												/>
												<stop
													stop-color="#222424"
													offset="100%"
												/>
											</linearGradient>
										</defs>
										<path
											d="M0 0h720v504.382L279.437 630.304c-53.102 15.177-108.454-15.567-123.631-68.669-.072-.25-.142-.5-.211-.75L0 0z"
											fill="url(#a)"
											fill-rule="evenodd"
										/>
									</svg>
								</div>
								<img
									style="
										margin-left: auto;
										margin-top: -60px;
									"
									src="/images/hero-1.jpg"
									alt=""
									width="420"
								/>
								<div
									style="display: none"
									class="hero-dots hero-dots-1 is-moving-object is-translating"
									data-translating-factor="160"
								>
									<svg
										width="279"
										height="97"
										xmlns="http://www.w3.org/2000/svg"
									>
										<g fill="#43F1FF" fill-rule="evenodd">
											<path
												d="M71.686 0l-2.899 1.334L68 4.157l.926 2.688L71.686 8l2.6-1.31L76 4.156l-1.295-2.94z"
											/>
											<path
												fill-opacity=".64"
												d="M38.843 2l-1.45.667L37 4.079l.463 1.344 1.38.577 1.3-.655L41 4.079l-.648-1.47z"
											/>
											<path
												fill-opacity=".24"
												d="M65.843 55l-1.45.667L64 57.079l.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47z"
											/>
											<path
												fill-opacity=".64"
												d="M94.765 29l-2.175 1-.59 2.118.695 2.016 2.07.866 1.95-.983 1.285-1.9-.972-2.204z"
											/>
											<path
												fill-opacity=".8"
												d="M58.765 25l-2.175 1-.59 2.118.695 2.016 2.07.866 1.95-.983 1.285-1.9-.972-2.204z"
											/>
											<path
												fill-opacity=".48"
												d="M18.843 44l-1.45.667L17 46.079l.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47z"
											/>
											<path
												fill-opacity=".64"
												d="M8.843 29l-1.45.667L7 31.079l.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47z"
											/>
											<path
												fill-opacity=".48"
												d="M32.843 29l-1.45.667L31 31.079l.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47zM.922 45l-.725.333L0 46.04l.232.672.69.289.65-.328L2 46.04l-.324-.735z"
											/>
											<path
												fill-opacity=".24"
												d="M267.843 93l-1.45.667-.393 1.412.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47z"
											/>
											<path
												fill-opacity=".8"
												d="M275.765 75l-2.175 1-.59 2.118.695 2.016 2.07.866 1.95-.983 1.285-1.9-.972-2.204z"
											/>
											<path
												fill-opacity=".48"
												d="M259.843 78l-1.45.667-.393 1.412.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47z"
											/>
										</g>
									</svg>
								</div>
								<div
									style="display: none"
									class="hero-dots hero-dots-2 is-moving-object is-translating"
									data-translating-factor="120"
								>
									<svg
										width="138"
										height="132"
										xmlns="http://www.w3.org/2000/svg"
									>
										<g fill="#43F1FF" fill-rule="evenodd">
											<path
												d="M73.686 66l-2.899 1.334L70 70.157l.926 2.688L73.686 74l2.6-1.31L78 70.156l-1.295-2.94z"
											/>
											<path
												fill-opacity=".64"
												d="M108.843 0l-1.45.667L107 2.079l.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47z"
											/>
											<path
												fill-opacity=".24"
												d="M135.843 53l-1.45.667-.393 1.412.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47z"
											/>
											<path
												fill-opacity=".64"
												d="M107.765 53l-2.175 1-.59 2.118.695 2.016 2.07.866 1.95-.983 1.285-1.9-.972-2.204z"
											/>
											<path
												fill-opacity=".8"
												d="M128.765 23l-2.175 1-.59 2.118.695 2.016 2.07.866 1.95-.983 1.285-1.9-.972-2.204z"
											/>
											<path
												fill-opacity=".48"
												d="M88.843 42l-1.45.667L87 44.079l.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47z"
											/>
											<path
												fill-opacity=".64"
												d="M78.843 27l-1.45.667L77 29.079l.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47z"
											/>
											<path
												fill-opacity=".48"
												d="M102.843 27l-1.45.667-.393 1.412.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47zM70.922 43l-.725.333-.197.706.232.672.69.289.65-.328.428-.633-.324-.735z"
											/>
											<path
												d="M2.765 126L.59 127 0 129.118l.695 2.016 2.07.866 1.95-.983 1.285-1.9-.972-2.204z"
											/>
											<path
												fill-opacity=".64"
												d="M24.843 127l-1.45.667-.393 1.412.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47z"
											/>
											<path
												fill-opacity=".48"
												d="M6.922 114l-.725.333-.197.706.232.672.69.289.65-.328.428-.633-.324-.735z"
											/>
										</g>
									</svg>
								</div>
								<div
									class="hero-dots hero-dots-3 is-moving-object is-translating"
									data-translating-factor="160"
								>
									<svg
										width="98"
										height="59"
										xmlns="http://www.w3.org/2000/svg"
									>
										<g fill="#43F1FF" fill-rule="evenodd">
											<path
												d="M26.314 0l2.899 1.334L30 4.157l-.926 2.688L26.314 8l-2.6-1.31L22 4.156l1.295-2.94z"
											/>
											<path
												fill-opacity=".64"
												d="M59.157 2l1.45.667L61 4.079l-.463 1.344-1.38.577-1.3-.655L57 4.079l.648-1.47z"
											/>
											<path
												fill-opacity=".24"
												d="M32.157 55l1.45.667.393 1.412-.463 1.344-1.38.577-1.3-.655L30 57.079l.648-1.47z"
											/>
											<path
												fill-opacity=".64"
												d="M3.235 29l2.175 1L6 32.118l-.695 2.016-2.07.866-1.95-.983L0 32.117l.972-2.204z"
											/>
											<path
												fill-opacity=".8"
												d="M39.235 25l2.175 1 .59 2.118-.695 2.016-2.07.866-1.95-.983-1.285-1.9.972-2.204z"
											/>
											<path
												fill-opacity=".48"
												d="M79.157 44l1.45.667.393 1.412-.463 1.344-1.38.577-1.3-.655L77 46.079l.648-1.47z"
											/>
											<path
												fill-opacity=".64"
												d="M89.157 29l1.45.667.393 1.412-.463 1.344-1.38.577-1.3-.655L87 31.079l.648-1.47z"
											/>
											<path
												fill-opacity=".48"
												d="M65.157 29l1.45.667.393 1.412-.463 1.344-1.38.577-1.3-.655L63 31.079l.648-1.47zM97.078 45l.725.333.197.706-.232.672-.69.289-.65-.328L96 46.04l.324-.735z"
											/>
										</g>
									</svg>
								</div>
								<div class="hero-line hero-line-1">
									<svg
										width="344"
										height="217"
										xmlns="http://www.w3.org/2000/svg"
									>
										<defs>
											<linearGradient
												x1="18.74%"
												y1="17.384%"
												x2="96.787%"
												y2="88.669%"
												id="line-1-a"
											>
												<stop
													stop-color="#5D6AFF"
													stop-opacity="0"
													offset="0%"
												/>
												<stop
													stop-color="#5D6AFF"
													offset="53.489%"
												/>
												<stop
													stop-color="#5D6AFF"
													stop-opacity="0"
													offset="100%"
												/>
											</linearGradient>
										</defs>
										<path
											d="M340.86 180.664l2.281 3.287c-79.796 55.378-120.994 39.511-120.994-47.035 0-82.777-47.283-92.246-144.735-27.901-32.607 20.428-55.391 21.53-67.544 2.516C-1.882 93.147-3.092 56.053 5.987 0l3.948.64c-8.928 55.125-7.743 91.453 3.303 108.736 10.644 16.653 31.058 15.666 62.01-3.725 99.65-65.797 150.9-55.534 150.9 31.265 0 83.03 37.371 97.424 114.713 43.748z"
											fill="url(#line-1-a)"
											fill-rule="nonzero"
											transform="matrix(-1 0 0 1 343.141 0)"
										/>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="features section">
					<div class="container">
						<div class="features-inner section-inner">
							<div class="features-wrap">
								<div class="feature">
									<div class="feature-inner">
										<div class="feature-header mb-16">
											<h4 class="feature-title m-0">
												Cari Calon Pasangan
											</h4>
										</div>
										<p class="text-sm mb-0">
											Cari calon pasangan hidup anda
											sesuai dengan kriteria yang anda
											harapkan.
										</p>
									</div>
								</div>
								<div class="feature">
									<div class="feature-inner">
										<div class="feature-header mb-16">
											<h4 class="feature-title m-0">
												Taaruf
											</h4>
										</div>
										<p class="text-sm mb-0">
											Kenali calon pasangan hidup anda
											dengan jalan taaruf.
										</p>
									</div>
								</div>
								<div class="feature">
									<div class="feature-inner">
										<div class="feature-header mb-16">
											<h4 class="feature-title m-0">
												Khitbah
											</h4>
										</div>
										<p class="text-sm mb-0">
											Persiapkan lamaran kepada calon
											pasanganmu, ketika kamu sudah yakin.
										</p>
									</div>
								</div>
								<div class="feature">
									<div class="feature-inner">
										<div class="feature-header mb-16">
											<h4 class="feature-title m-0">
												Nikah
											</h4>
										</div>
										<p class="text-sm mb-0">
											Miliki dia seutuhnya dengan cara
											menikahinya.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>

			<footer class="site-footer">
				<div class="footer-bg">
					<svg
						width="385"
						height="305"
						xmlns="http://www.w3.org/2000/svg"
					>
						<defs>
							<linearGradient
								x1="50%"
								y1="34.994%"
								x2="50%"
								y2="97.738%"
								id="footer-bg"
							>
								<stop stop-color="#151616" offset="0%" />
								<stop stop-color="#222424" offset="100%" />
							</linearGradient>
						</defs>
						<path
							d="M384.557 116.012V305H0L210.643 0l173.914 116.012z"
							fill="url(#footer-bg)"
							fill-rule="evenodd"
						/>
					</svg>
				</div>
				<div
					class="footer-dots is-moving-object is-translating"
					data-translating-factor="160"
				>
					<svg
						width="69"
						height="91"
						xmlns="http://www.w3.org/2000/svg"
					>
						<g fill="#43F1FF" fill-rule="evenodd">
							<path
								d="M37.105 41.007l-2.9 1.334-.786 2.823.926 2.689 2.76 1.154 2.6-1.31 1.714-2.533-1.296-2.94z"
							/>
							<path
								fill-opacity=".64"
								d="M63.109 27.24l-1.45.666-.394 1.412.464 1.344 1.38.577 1.3-.655.856-1.266-.647-1.47z"
							/>
							<path
								fill-opacity=".24"
								d="M66.226 86.638l-1.45.667-.393 1.412.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47z"
							/>
							<path
								fill-opacity=".64"
								d="M13.497 43.713l-2.175 1-.59 2.118.695 2.016 2.07.866 1.95-.983 1.285-1.9-.972-2.204z"
							/>
							<path
								fill-opacity=".8"
								d="M59.076 56.658l-2.175 1-.59 2.117.695 2.017 2.07.866 1.949-.983 1.286-1.9-.972-2.204z"
							/>
							<path
								fill-opacity=".48"
								d="M22.262 18.49l-1.45.667-.393 1.412.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47z"
							/>
							<path
								fill-opacity=".64"
								d="M23.422.5l-1.45.667-.393 1.412.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47z"
							/>
							<path
								fill-opacity=".48"
								d="M2.637 12.5l-1.45.667-.393 1.412.463 1.344 1.38.577 1.3-.655.857-1.266-.648-1.47zM36.563 10.856l-.725.334-.197.706.232.672.69.288.65-.327.428-.633-.324-.735z"
							/>
						</g>
					</svg>
				</div>
				<div class="container">
					<div class="site-footer-inner has-top-divider">
						<div class="footer-copyright">
							&copy; {{ date('Y') }} STMIK Handayani Makassar. All Rights
							Reserved
						</div>
					</div>
				</div>
			</footer>
		</div>

		<script src="/dist/js/main.min.js"></script>
	</body>
</html>
