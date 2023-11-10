<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark" id="m_aside_left_close_btn" appunwraptag="">
    <i class="la la-close"></i>
</button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark">
    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark" m-menu-vertical="1"
        m-menu-scrollable="0" m-menu-dropdown-timeout="500">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow">
            {{-- <li class="m-menu__item" aria-haspopup="true"> --}}
            <li class="m-menu__item {{ (Request::segment(1) == '') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                <a href="/" class="m-menu__link">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Painel
                            </span>
                            <!-- <span class="m-menu__link-badge">
								<span class="m-badge m-badge--danger">
									2
								</span>
							</span> -->
                        </span>
                    </span>
                </a>
            </li>
            <!-- <li class="m-menu__section">
				<h4 class="m-menu__section-text">
					Angular
				</h4>
				<i class="m-menu__section-icon flaticon-more-v3"></i>
			</li> -->
            <!-- <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"  aria-haspopup="true" >
				<a  routerLink="/angular/ng-bootstrap" class="m-menu__link">
					<i class="m-menu__link-icon flaticon-settings"></i>
					<span class="m-menu__link-text">
						Ng-Bootstrap
					</span>
				</a>
			</li> -->
            <!-- <li class="m-menu__item  m-menu__item--submenu" routerLinkActive="m-menu__item--open" routerLinkActiveOptions="{ exact: true }"  aria-haspopup="true"  m-menu-submenu-toggle="hover">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-settings"></i>
                    <span class="m-menu__link-text">
                        Crud
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"  aria-haspopup="true" >
                            <span class="m-menu__link">
                                <span class="m-menu__link-text">
                                    Diego Teste
                                </span>
                            </span>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"  aria-haspopup="true" >
                            <a  routerLink="/crud" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    List
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/crud/form-add" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    New
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"  aria-haspopup="true" >
                            <a  routerLink="/crud/form-edit/1882" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Edit
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/crud/form-view/1122" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    View
                                </span>
                            </a>
                        </li>

                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"  aria-haspopup="true" >
                            <a  routerLink="/crud/list-laravel" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    List Laravel
                                </span>
                            </a>
                        </li>

                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"  aria-haspopup="true" >
                            <a  routerLink="/crud/new-laravel" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    New Laravel
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->
            <li class="m-menu__section">
                <h4 class="m-menu__section-text">
                    Menu - Socio Torcedor
                </h4>
                <i class="m-menu__section-icon flaticon-more-v3"></i>
            </li>



            <li class="m-menu__item {{ (Request::segment(1) == 'socio') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                <a href="/socio" class="m-menu__link">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Socio Torcedor
                            </span>
                            <!-- <span class="m-menu__link-badge">
								<span class="m-badge m-badge--danger">
									2
								</span>
							</span> -->
                        </span>
                    </span>
                </a>
            </li>

            <li class="m-menu__item {{ (Request::segment(1) == 'plano') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                <a href="/plano" class="m-menu__link">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Planos
                            </span>
                            <!-- <span class="m-menu__link-badge">
								<span class="m-badge m-badge--danger">
									2
								</span>
							</span> -->
                        </span>
                    </span>
                </a>
            </li>

            <li class="m-menu__item  {{ (Request::segment(1) == 'ticket') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                <a href="/ticket" class="m-menu__link">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Tickets(Contatos)
                            </span>
                            <!-- <span class="m-menu__link-badge">
								<span class="m-badge m-badge--danger">
									2
								</span>
							</span> -->
                        </span>
                    </span>
                </a>
            </li>

            <li class="m-menu__item  {{ (Request::segment(1) == 'parceiro-patrocinador') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                <a href="/parceiro-patrocinador" class="m-menu__link">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Parceiro/Patrocinador
                            </span>
                            <!-- <span class="m-menu__link-badge">
								<span class="m-badge m-badge--danger">
									2
								</span>
							</span> -->
                        </span>
                    </span>
                </a>
            </li>

            <li class="m-menu__item  {{ (Request::segment(1) == 'mensalidade') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                <a href="/mensalidade" class="m-menu__link">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Mensalidades
                            </span>
                            <!-- <span class="m-menu__link-badge">
								<span class="m-badge m-badge--danger">
									2
								</span>
							</span> -->
                        </span>
                    </span>
                </a>
            </li>





            <li class="m-menu__item  m-menu__item--submenu" routerLinkActive="m-menu__item--open"
                routerLinkActiveOptions="{ exact: true }" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-layers"></i>
                    <span class="m-menu__link-text">
                        GerenciaNet
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a href="/solicitacao-retirada-financeira" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Solicitacao de Retirada
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/transacoes-gerencia-net" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Transações
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/configuracao-gerencia-net" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Configurações
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="m-menu__item  " aria-haspopup="true">
                <a href="/usuarios" class="m-menu__link">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Usuários
                            </span>
                            <!-- <span class="m-menu__link-badge">
								<span class="m-badge m-badge--danger">
									2
								</span>
							</span> -->
                        </span>
                    </span>
                </a>
            </li>


            <!-- <li class="m-menu__item  m-menu__item--submenu" routerLinkActive="m-menu__item--open"
                routerLinkActiveOptions="{ exact: true }" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-share"></i>
                    <span class="m-menu__link-text">
                        Financeiro
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/components/icons/flaticon" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Contas a Pagar
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/components/icons/fontawesome" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Contas a Receber
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/components/icons/lineawesome" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Cobranças
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/components/icons/socicons" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Boletos
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/components/icons/socicons" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Recibos
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->

            <!-- <li class="m-menu__item  m-menu__item--submenu" routerLinkActive="m-menu__item--open"
                routerLinkActiveOptions="{ exact: true }" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-multimedia-1"></i>
                    <span class="m-menu__link-text">
                        Movimentações
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" routerLinkActive="m-menu__item--active"
                            routerLinkActiveOptions="{ exact: true }" aria-haspopup="true">
                            <span class="m-menu__link">
                                <span class="m-menu__link-text">
                                    Aluguel Ambientes
                                </span>
                            </span>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/components/buttons/group" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Aluguel Ambiente
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/components/buttons/dropdown" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Emissão Carteira
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" routerLinkActive="m-menu__item--open"
                            routerLinkActiveOptions="{ exact: true }" aria-haspopup="true" m-menu-submenu-toggle="hover">
                            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Button Icon
                                </span>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="m-menu__submenu">
                                <span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item" routerLinkActive="m-menu__item--active"
                                        routerLinkActiveOptions="{ exact: true }" aria-haspopup="true">
                                        <a routerLink="/components/buttons/icon/lineawesome" class="m-menu__link">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
                                                Lineawesome Icons
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item" routerLinkActive="m-menu__item--active"
                                        routerLinkActiveOptions="{ exact: true }" aria-haspopup="true">
                                        <a routerLink="/components/buttons/icon/fontawesome" class="m-menu__link">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
                                                Fontawesome Icons
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item" routerLinkActive="m-menu__item--active"
                                        routerLinkActiveOptions="{ exact: true }" aria-haspopup="true">
                                        <a routerLink="/components/buttons/icon/flaticon" class="m-menu__link">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
                                                Flaticon Icons
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li> -->

            <li class="m-menu__item  m-menu__item--submenu" routerLinkActive="m-menu__item--open"
                routerLinkActiveOptions="{ exact: true }" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-interface-1"></i>
                    <span class="m-menu__link-text">
                        Relatórios
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" routerLinkActive="m-menu__item--active"
                            routerLinkActiveOptions="{ exact: true }" aria-haspopup="true">
                            <span class="m-menu__link">
                                <span class="m-menu__link-text">
                                    Socios
                                </span>
                            </span>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/components/portlets/base" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Carteiras
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- <li class="m-menu__item  m-menu__item--submenu" routerLinkActive="m-menu__item--open"
                routerLinkActiveOptions="{ exact: true }" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-interface-9"></i>
                    <span class="m-menu__link-text">
                        Tabelas
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" routerLinkActive="m-menu__item--active"
                            routerLinkActiveOptions="{ exact: true }" aria-haspopup="true">
                            <span class="m-menu__link">
                                <span class="m-menu__link-text">
                                    Planos
                                </span>
                            </span>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/planos" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Planos
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/snippets/general/pricing-tables/pricing-table-2" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Pricing Tables v2
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/snippets/general/pricing-tables/pricing-table-3" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Pricing Tables v3
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/snippets/general/pricing-tables/pricing-table-4" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Pricing Tables v4
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->

            <li class="m-menu__item  m-menu__item--submenu" routerLinkActive="m-menu__item--open"
                routerLinkActiveOptions="{ exact: true }" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-interface-9"></i>
                    <span class="m-menu__link-text">
                        Tabelas Auxiliares
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" routerLinkActive="m-menu__item--active"
                            routerLinkActiveOptions="{ exact: true }" aria-haspopup="true">
                            <span class="m-menu__link">
                                <span class="m-menu__link-text">
                                    Tabelas Auxiliares
                                </span>
                            </span>
                        </li>
                        <li class="m-menu__item" aria-haspopup="true">
                            <a href="/estado" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Estados
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" aria-haspopup="true">
                            <a href="/cidade" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Cidades
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/snippets/general/pricing-tables/pricing-table-2" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Categorias
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/tipo-pagamento" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Tipo Pagamento
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a href="/faq" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Faqs
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" routerLinkActive="m-menu__item--open"
                routerLinkActiveOptions="{ exact: true }" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-interface-9"></i>
                    <span class="m-menu__link-text">
                        Configurações
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">

                        <li class="m-menu__item  m-menu__item--parent" routerLinkActive="m-menu__item--active"
                            routerLinkActiveOptions="{ exact: true }" aria-haspopup="true">
                            <span class="m-menu__link">
                                <span class="m-menu__link-text">
                                    Clube
                                </span>
                            </span>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a href="/banco" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Bancos
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/snippets/general/pricing-tables/pricing-table-1" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Boleto
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item" routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }"
                            aria-haspopup="true">
                            <a routerLink="/snippets/general/pricing-tables/pricing-table-2" class="m-menu__link">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Email
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
    <!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->
