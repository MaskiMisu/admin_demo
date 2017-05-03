<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-body">
						<div class="row">

							<!-- BEGIN ALERT - REVENUE -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
											<strong class="pull-right text-success text-lg">0,38% <i class="md md-trending-up"></i></strong>
											<strong class="text-xl">$ 32,829</strong><br/>
											<span class="opacity-50">Revenue</span>
											<div class="stick-bottom-left-right">
												<div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - REVENUE -->

							<!-- BEGIN ALERT - VISITS -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-warning no-margin">
											<strong class="pull-right text-warning text-lg">0,01% <i class="md md-swap-vert"></i></strong>
											<strong class="text-xl">432,901</strong><br/>
											<span class="opacity-50">Visits</span>
											<div class="stick-bottom-right">
												<div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - VISITS -->

							<!-- BEGIN ALERT - BOUNCE RATES -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-danger no-margin">
											<strong class="pull-right text-danger text-lg">0,18% <i class="md md-trending-down"></i></strong>
											<strong class="text-xl">42.90%</strong><br/>
											<span class="opacity-50">Bounce rate</span>
											<div class="stick-bottom-left-right">
												<div class="progress progress-hairline no-margin">
													<div class="progress-bar progress-bar-danger" style="width:43%"></div>
												</div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - BOUNCE RATES -->

							<!-- BEGIN ALERT - TIME ON SITE -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-success no-margin">
											<h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
											<strong class="text-xl">54 sec.</strong><br/>
											<span class="opacity-50">Avg. time on site</span>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - TIME ON SITE -->

						</div><!--end .row -->
						<div class="row">

							<!-- BEGIN SITE ACTIVITY -->
							<div class="col-md-9">
								<div class="card ">
									<div class="row">
										<div class="col-md-8">
											<div class="card-head">
												<header>Site activity</header>
											</div><!--end .card-head -->
											<div class="card-body height-8">
												<div id="flot-visitors-legend" class="flot-legend-horizontal stick-top-right no-y-padding"></div>
												<div id="flot-visitors" class="flot height-7" data-title="Activity entry" data-color="#7dd8d2,#0aa89e"></div>
											</div><!--end .card-body -->
										</div><!--end .col -->
										<div class="col-md-4">
											<div class="card-head">
												<header>Today's stats</header>
											</div>
											<div class="card-body height-8">
												<strong>214</strong> members
												<span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
												<div class="progress progress-hairline">
													<div class="progress-bar progress-bar-primary-dark" style="width:43%"></div>
												</div>
												756 pageviews
												<span class="pull-right text-success text-sm">0,68% <i class="md md-trending-up"></i></span>
												<div class="progress progress-hairline">
													<div class="progress-bar progress-bar-primary-dark" style="width:11%"></div>
												</div>
												291 bounce rates
												<span class="pull-right text-danger text-sm">21,08% <i class="md md-trending-down"></i></span>
												<div class="progress progress-hairline">
													<div class="progress-bar progress-bar-danger" style="width:93%"></div>
												</div>
												32,301 visits
												<span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
												<div class="progress progress-hairline">
													<div class="progress-bar progress-bar-primary-dark" style="width:63%"></div>
												</div>
												132 pages
												<span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
												<div class="progress progress-hairline">
													<div class="progress-bar progress-bar-primary-dark" style="width:47%"></div>
												</div>
											</div><!--end .card-body -->
										</div><!--end .col -->
									</div><!--end .row -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END SITE ACTIVITY -->

							<!-- BEGIN SERVER STATUS -->
							<div class="col-md-3">
								<div class="card">
									<div class="card-head">
										<header class="text-primary">Server status</header>
									</div><!--end .card-head -->
									<div class="card-body height-4">
										<div class="pull-right text-center">
											<em class="text-primary">Temperature</em>
											<br/>
											<div id="serverStatusKnob" class="knob knob-shadow knob-primary knob-body-track size-2">
												<input type="text" class="dial" data-min="0" data-max="100" data-thickness=".09" value="50" data-readOnly=true>
											</div>
										</div>
									</div><!--end .card-body -->
									<div class="card-body height-4 no-padding">
										<div class="stick-bottom-left-right">
											<div id="rickshawGraph" class="height-4" data-color1="#0aa89e" data-color2="rgba(79, 89, 89, 0.2)"></div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END SERVER STATUS -->

						</div><!--end .row -->
						<div class="row">

							<!-- BEGIN TODOS -->
							<div class="col-md-3">
								<div class="card ">
									<div class="card-head">
										<header>Todo's</header>
										<div class="tools">
											<a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
										</div>
									</div><!--end .card-head -->
									<div class="card-body no-padding height-9 scroll">
										<ul class="list" data-sortable="true">
											<li class="tile">
												<div class="checkbox checkbox-styled tile-text">
													<label>
														<input type="checkbox" checked>
														<span>Call clients for follow-up</span>
													</label>
												</div>
												<a class="btn btn-flat ink-reaction btn-default">
													<i class="md md-delete"></i>
												</a>
											</li>
											<li class="tile">
												<div class="checkbox checkbox-styled tile-text">
													<label>
														<input type="checkbox">
														<span>
															Schedule meeting
															<small>opportunity for new customers</small>
														</span>
													</label>
												</div>
												<a class="btn btn-flat ink-reaction btn-default">
													<i class="md md-delete"></i>
												</a>
											</li>
											<li class="tile">
												<div class="checkbox checkbox-styled tile-text">
													<label>
														<input type="checkbox">
														<span>
															Upload files to server
															<small>The files must be shared with all members of the board</small>
														</span>
													</label>
												</div>
												<a class="btn btn-flat ink-reaction btn-default">
													<i class="md md-delete"></i>
												</a>
											</li>
											<li class="tile">
												<div class="checkbox checkbox-styled tile-text">
													<label>
														<input type="checkbox">
														<span>Forward important tasks</span>
													</label>
												</div>
												<a class="btn btn-flat ink-reaction btn-default">
													<i class="md md-delete"></i>
												</a>
											</li>
											<li class="tile">
												<div class="checkbox checkbox-styled tile-text">
													<label>
														<input type="checkbox">
														<span>Forward important tasks</span>
													</label>
												</div>
												<a class="btn btn-flat ink-reaction btn-default">
													<i class="md md-delete"></i>
												</a>
											</li>
											<li class="tile">
												<div class="checkbox checkbox-styled tile-text">
													<label>
														<input type="checkbox">
														<span>Forward important tasks</span>
													</label>
												</div>
												<a class="btn btn-flat ink-reaction btn-default">
													<i class="md md-delete"></i>
												</a>
											</li>
										</ul>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END TODOS -->

							<!-- BEGIN REGISTRATION HISTORY -->
							<div class="col-md-6">
								<div class="card">
									<div class="card-head">
										<header>Registration history</header>
										<div class="tools">
											<a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>
											<a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
											<a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
										</div>
									</div><!--end .card-head -->
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="col-sm-6 hidden-xs">
												<div class="force-padding text-sm text-default-light">
													<p>
														<i class="md md-mode-comment text-primary-light"></i>
														The registrations are measured from the time that the redesign was fully implemented and after the first e-mailing.
													</p>
												</div>
											</div><!--end .col -->
											<div class="col-sm-6">
												<div class="force-padding pull-right text-default-light">
													<h2 class="no-margin text-primary-dark"><span class="text-xxl">66.05%</span></h2>
													<i class="fa fa-caret-up text-success fa-fw"></i> more registrations
												</div>
											</div><!--end .col -->
										</div><!--end .row -->
										<div class="stick-bottom-left-right force-padding">
											<div id="flot-registrations" class="flot height-5" data-title="Registration history" data-color="#0aa89e"></div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END REGISTRATION HISTORY -->

							<!-- BEGIN NEW REGISTRATIONS -->
							<div class="col-md-3">
								<div class="card">
									<div class="card-head">
										<header>New registrations</header>
										<div class="tools hidden-md">
											<a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
										</div>
									</div><!--end .card-head -->
									<div class="card-body no-padding height-9 scroll">
										<ul class="list divider-full-bleed">
											<li class="tile">
												<div class="tile-content">
													<div class="tile-icon">
														<img src="../../assets/img/avatar9.jpg?1404026744" alt="" />
													</div>
													<div class="tile-text">Ann Laurens</div>
												</div>
												<a class="btn btn-flat ink-reaction">
													<i class="md md-block text-default-light"></i>
												</a>
											</li>
											<li class="tile">
												<div class="tile-content">
													<div class="tile-icon">
														<img src="../../assets/img/avatar4.jpg?1404026791" alt="" />
													</div>
													<div class="tile-text">Alex Nelson</div>
												</div>
												<a class="btn btn-flat ink-reaction">
													<i class="md md-block text-default-light"></i>
												</a>
											</li>
											<li class="tile">
												<div class="tile-content">
													<div class="tile-icon">
														<img src="../../assets/img/avatar11.jpg?1404026774" alt="" />
													</div>
													<div class="tile-text">Mary Peterson</div>
												</div>
												<a class="btn btn-flat ink-reaction">
													<i class="md md-block text-default-light"></i>
												</a>
											</li>
											<li class="tile">
												<div class="tile-content">
													<div class="tile-icon">
														<img src="../../assets/img/avatar7.jpg?1404026721" alt="" />
													</div>
													<div class="tile-text">Philip Ericsson</div>
												</div>
												<a class="btn btn-flat ink-reaction">
													<i class="md md-block text-default-light"></i>
												</a>
											</li>
											<li class="tile">
												<div class="tile-content">
													<div class="tile-icon">
														<img src="../../assets/img/avatar8.jpg?1404026729" alt="" />
													</div>
													<div class="tile-text">Jim Peters</div>
												</div>
												<a class="btn btn-flat ink-reaction">
													<i class="md md-block text-default-light"></i>
												</a>
											</li>
											<li class="tile">
												<div class="tile-content">
													<div class="tile-icon">
														<img src="../../assets/img/avatar2.jpg?1404026449" alt="" />
													</div>
													<div class="tile-text">Jessica Cruise</div>
												</div>
												<a class="btn btn-flat ink-reaction">
													<i class="md md-block text-default-light"></i>
												</a>
											</li>
										</ul>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END NEW REGISTRATIONS -->

						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
			<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="../../html/dashboards/dashboard.html">
							<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="../../html/dashboards/dashboard.html" class="active">
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN EMAIL -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="md md-email"></i></div>
								<span class="title">Email</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="../../html/mail/inbox.html" ><span class="title">Inbox</span></a></li>
								<li><a href="../../html/mail/compose.html" ><span class="title">Compose</span></a></li>
								<li><a href="../../html/mail/reply.html" ><span class="title">Reply</span></a></li>
								<li><a href="../../html/mail/message.html" ><span class="title">View message</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END EMAIL -->

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="../../html/layouts/builder.html" >
								<div class="gui-icon"><i class="md md-web"></i></div>
								<span class="title">Layouts</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN UI -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-puzzle-piece fa-fw"></i></div>
								<span class="title">UI elements</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="../../html/ui/colors.html" ><span class="title">Colors</span></a></li>
								<li><a href="../../html/ui/typography.html" ><span class="title">Typography</span></a></li>
								<li><a href="../../html/ui/cards.html" ><span class="title">Cards</span></a></li>
								<li><a href="../../html/ui/buttons.html" ><span class="title">Buttons</span></a></li>
								<li><a href="../../html/ui/lists.html" ><span class="title">Lists</span></a></li>
								<li><a href="../../html/ui/tabs.html" ><span class="title">Tabs</span></a></li>
								<li><a href="../../html/ui/accordions.html" ><span class="title">Accordions</span></a></li>
								<li><a href="../../html/ui/messages.html" ><span class="title">Messages</span></a></li>
								<li><a href="../../html/ui/offcanvas.html" ><span class="title">Off-canvas</span></a></li>
								<li><a href="../../html/ui/grid.html" ><span class="title">Grid</span></a></li>
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Icons</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="../../html/ui/icons/materialicons.html" ><span class="title">Material Design Icons</span></a></li>
										<li><a href="../../html/ui/icons/fontawesome.html" ><span class="title">Font Awesome</span></a></li>
										<li><a href="../../html/ui/icons/glyphicons.html" ><span class="title">Glyphicons</span></a></li>
										<li><a href="../../html/ui/icons/skycons.html" ><span class="title">Skycons</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END UI -->

						<!-- BEGIN TABLES -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-table"></i></div>
								<span class="title">Tables</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="../../html/tables/static.html" ><span class="title">Static Tables</span></a></li>
								<li><a href="../../html/tables/dynamic.html" ><span class="title">Dynamic Tables</span></a></li>
								<li><a href="../../html/tables/responsive.html" ><span class="title">Responsive Table</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END TABLES -->

						<!-- BEGIN FORMS -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
								<span class="title">Forms</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="../../html/forms/basic.html" ><span class="title">Form basic</span></a></li>
								<li><a href="../../html/forms/advanced.html" ><span class="title">Form advanced</span></a></li>
								<li><a href="../../html/forms/layouts.html" ><span class="title">Form layouts</span></a></li>
								<li><a href="../../html/forms/editors.html" ><span class="title">Editors</span></a></li>
								<li><a href="../../html/forms/validation.html" ><span class="title">Form validation</span></a></li>
								<li><a href="../../html/forms/wizard.html" ><span class="title">Form wizard</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END FORMS -->

						<!-- BEGIN PAGES -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="md md-computer"></i></div>
								<span class="title">Pages</span>
							</a>
							<!--start submenu -->
							<ul>
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Contacts</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="../../html/pages/contacts/search.html" ><span class="title">Search</span></a></li>
										<li><a href="../../html/pages/contacts/details.html" ><span class="title">Contact card</span></a></li>
										<li><a href="../../html/pages/contacts/add.html" ><span class="title">Insert contact</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Search</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="../../html/pages/search/results-text.html" ><span class="title">Results - Text</span></a></li>
										<li><a href="../../html/pages/search/results-text-image.html" ><span class="title">Results - Text and Image</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Blog</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="../../html/pages/blog/masonry.html" ><span class="title">Blog masonry</span></a></li>
										<li><a href="../../html/pages/blog/list.html" ><span class="title">Blog list</span></a></li>
										<li><a href="../../html/pages/blog/post.html" ><span class="title">Blog post</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Error pages</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="../../html/pages/404.html" ><span class="title">404 page</span></a></li>
										<li><a href="../../html/pages/500.html" ><span class="title">500 page</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li><a href="../../html/pages/profile.html" ><span class="title">User profile<span class="badge style-accent">42</span></span></a></li>
								<li><a href="../../html/pages/invoice.html" ><span class="title">Invoice</span></a></li>
								<li><a href="../../html/pages/calendar.html" ><span class="title">Calendar</span></a></li>
								<li><a href="../../html/pages/pricing.html" ><span class="title">Pricing</span></a></li>
								<li><a href="../../html/pages/timeline.html" ><span class="title">Timeline</span></a></li>
								<li><a href="../../html/pages/maps.html" ><span class="title">Maps</span></a></li>
								<li><a href="../../html/pages/locked.html" ><span class="title">Lock screen</span></a></li>
								<li><a href="../../html/pages/login.html" ><span class="title">Login</span></a></li>
								<li><a href="../../html/pages/blank.html" ><span class="title">Blank page</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END FORMS -->

						<!-- BEGIN CHARTS -->
						<li>
							<a href="../../html/charts/charts.html" >
								<div class="gui-icon"><i class="md md-assessment"></i></div>
								<span class="title">Charts</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END CHARTS -->

						<!-- BEGIN LEVELS -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-folder-open fa-fw"></i></div>
								<span class="title">Menu levels demo</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="#"><span class="title">Item 1</span></a></li>
								<li><a href="#"><span class="title">Item 1</span></a></li>
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Open level 2</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="#"><span class="title">Item 2</span></a></li>
										<li class="gui-folder">
											<a href="javascript:void(0);">
												<span class="title">Open level 3</span>
											</a>
											<!--start submenu -->
											<ul>
												<li><a href="#"><span class="title">Item 3</span></a></li>
												<li><a href="#"><span class="title">Item 3</span></a></li>
												<li class="gui-folder">
													<a href="javascript:void(0);">
														<span class="title">Open level 4</span>
													</a>
													<!--start submenu -->
													<ul>
														<li><a href="#"><span class="title">Item 4</span></a></li>
														<li class="gui-folder">
															<a href="javascript:void(0);">
																<span class="title">Open level 5</span>
															</a>
															<!--start submenu -->
															<ul>
																<li><a href="#"><span class="title">Item 5</span></a></li>
																<li><a href="#"><span class="title">Item 5</span></a></li>
															</ul><!--end /submenu -->
														</li><!--end /submenu-li -->
													</ul><!--end /submenu -->
												</li><!--end /submenu-li -->
											</ul><!--end /submenu -->
										</li><!--end /submenu-li -->
									</ul><!--end /submenu -->
								</li><!--end /submenu-li -->
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END LEVELS -->

					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->