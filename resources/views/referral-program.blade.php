@include('header')

<title>推介计划 - 高速网络,企业服务 &amp; 匿名安全 高可用性服务商 | {{$title}}</title>
<meta
    property="og:title"
    content="推介计划 - 高速网络,企业服务 &amp; 匿名安全 高可用性服务商 | {{$title}}"
>
<main
    id="content"
    role="main"
>

    <div
        class="bg-img-start"
        style="background-image: url(/assets/svg/components/card-11.svg);"
    >
        <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2">
            <div class="w-md-75 w-lg-50 text-center mx-md-auto">
                <h1 class="fw-light">推荐计划</h1>
                <p>每推荐成功一位顾客，轻松赚取 15% 收益！</p>
            </div>
        </div>
    </div>

    <div class="container content-space-2 content-space-lg-2">
        <div class="w-lg-75 mx-lg-auto">
            <div class="card card-sm overflow-hidden">
                <div class="card-body">
                    <div class="row justify-content-md-start align-items-md-center text-center text-md-start">
                        <div class="col-md offset-md-3 mb-3 mb-md-0">
                            <h4 class="card-title">🎉创作者计划 免费获得半年大流量订阅!</h4>
                        </div>
                        <div class="col-md-auto">
                            <a
                                class="btn btn-primary btn-transition"
                                href="./special-offers"
                            >了解更多</a>
                        </div>
                    </div>
                    <figure class="w-25 d-none d-md-block position-absolute top-0 start-0 mt-n2">
                        <img
                            class="card-img"
                            src="/assets/svg/illustrations/apps.svg"
                            alt="Image Description"
                        >
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="container content-space-2">

        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2>它是如何工作的</h2>
            <p>向朋友介绍 {{$title}}，当他们使用您的邀请码成功付款时即可获取收益。</p>
        </div>

        <ul class="step step-md step-icon-lg">
            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">1</span>
                    <div class="step-content">
                        <h4 class="step-title">分享邀请码</h4>
                        <p class="step-text">向您的朋友或亲戚分享您创建的邀请码。</p>
                    </div>
                </div>
            </li>
            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">2</span>
                    <div class="step-content">
                        <h4 class="step-title">推荐人注册</h4>
                        <p class="step-text">您每推荐成功一名新顾客都有资格获得推广奖金！</p>
                    </div>
                </div>
            </li>
            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">3</span>
                    <div class="step-content">
                        <h4 class="step-title">收到奖金</h4>
                        <p class="step-text">每位经过我们验证成功的新用户，您都将收到奖金到您的推广账户中。</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>


    <div class="container content-space-2">

        <div class="w-lg-75 text-center mx-lg-auto mb-5 mb-md-9">
            <h2>邀请注册</h2>
            <p>所有 {{$title}} 客户，均可通过分享邀请码来获取收益。将您独一无二的邀请码发给您的朋友，邀请他们使用 {{$title}}，您就可以从 {{$title}} 获得相应回报，并能够使用所得到的佣金购买
                {{$title}} 服务。</p>
        </div>

        <div class="row gx-0 align-items-lg-center mb-7 mb-md-10">
            <div class="col-lg-7">

                <div
                    class="card card-lg text-center zi-2"
                    data-aos="fade-up"
                >
                    <div class="card-header pb-0">
                        <div class="mb-1">
                            <span class="display-4 text-primary">15%</span>
                        </div>
                        <p>循环返利！</p>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-sm-center align-items-sm-center mb-5">
                            <div class="col-sm-5">
                                <div class="mb-2">
                                    <img
                                        class="avatar avatr-xl avatar-4x3"
                                        src="/assets/svg/illustrations/account-creation.svg"
                                        alt="SVG"
                                    >
                                </div>
                                <h4>用户完成注册</h4>
                            </div>

                            <div class="col-sm-1 my-3 my-sm-0">
                                <span class="fs-3 text-primary">+</span>
                            </div>

                            <div class="col-sm-5">
                                <div class="mb-2">
                                    <img
                                        class="avatar avatr-xl avatar-4x3"
                                        src="/assets/svg/illustrations/pro-account.svg"
                                        alt="SVG"
                                    >
                                </div>
                                <h4>使用您的邀请码</h4>
                            </div>

                        </div>

                        <div class="mb-7">
                            <p class="card-text small">交易成功后，<br>佣金将自动发放至佣金账户</p>
                        </div>
                        <a
                            href="/user#/invite"
                            class="btn btn-primary btn-transition px-6"
                        >分享邀请码</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-5">

                <div
                    class="card card-lg bg-dark ms-md-n2"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <div class="card-body">

                        <ul class="list-pointer list-pointer-soft-bg-light list-pointer-lg">
                            <li class="list-pointer-item">
                                <h4 class="text-white mb-1">多个邀请码</h4>
                                <p class="text-white-70 mb-0">您可以创建多个邀请码，方便在多个独立渠道分享您的邀请</p>
                            </li>
                            <li class="list-pointer-item">
                                <h4 class="text-white mb-1">永不过期</h4>
                                <p class="text-white-70 mb-0">邀请码永不过期，您将优惠码分享给朋友后，Ta 可以在任何时间完成注册并付款</p>
                            </li>
                            <li class="list-pointer-item">
                                <h4 class="text-white mb-1">立即划转</h4>
                                <p class="text-white-70 mb-0">佣金自动到达佣金账户后，您可以立即划转到余额账户并使用</p>
                            </li>
                            <li class="list-pointer-item">
                                <h4 class="text-white mb-1">提现到其它金融机构</h4>
                                <p class="text-white-70 mb-0">当佣金满足 200 元后，您可请求将佣金提现至其它金融机构上</p>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>

        </div>


        <div class="w-lg-75 mx-lg-auto">
            <div class="d-block d-sm-flex align-items-sm-center">
                <div class="flex-shrink-0 mb-3 mb-sm-0">
                    <img
                        class="avatar avatar-xl avatar-4x3"
                        src="assets/svg/illustrations/growing-business.svg"
                        alt="SVG"
                    >
                </div>
                <div class="flex-grow-1 ms-4">
                    <h4>获取更多推广提成</h4>
                    <p class="mb-0">您可以加入我们的《视频创作者》计划，并成为我们的推广大使，通过您的视频宣传即可获得更高的收益！ <a
                            class="link"
                            href="contact-us"
                        >立即查看详情 <i class="bi-chevron-right small"></i></a></p>
                </div>
            </div>
        </div>

    </div>


    <div class="container content-space-2">

        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2>附加信息</h2>
        </div>

        <div class="w-lg-65 mx-lg-auto">

            <div
                class="accordion accordion-flush accordion-lg"
                id="accordionFAQ"
            >

                <div class="accordion-item">
                    <div
                        class="accordion-header"
                        id="headingCuriousOne"
                    >
                        <a
                            class="accordion-button"
                            role="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseOne"
                            aria-expanded="true"
                            aria-controls="collapseOne"
                        >
                            我何时收到推广佣金？
                        </a>
                    </div>
                    <div
                        id="collapseOne"
                        class="accordion-collapse collapse show"
                        aria-labelledby="headingCuriousOne"
                        data-bs-parent="#accordionFAQ"
                    >
                        <div class="accordion-body">
                            当用户完成注册并购买订阅成功后，通常在 24 小时内完成审核。审核成功后您将收到奖金。
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <div
                        class="accordion-header"
                        id="headingCuriousTwo"
                    >
                        <a
                            class="accordion-button collapsed"
                            role="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo"
                            aria-expanded="false"
                            aria-controls="collapseTwo"
                        >
                            如何将推广佣金提现？
                        </a>
                    </div>
                    <div
                        id="collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingCuriousTwo"
                        data-bs-parent="#accordionFAQ"
                    >
                        <div class="accordion-body">
                            当您的佣金金额达到我们协定的数额后，您可在用户中心提交一份申请结算的工单，并在工单中提供您的提现账户。提现会在 7 个工作日内到账。
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <div
                        class="accordion-header"
                        id="headingCuriousThree"
                    >
                        <a
                            class="accordion-button collapsed"
                            role="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseThree"
                            aria-expanded="false"
                            aria-controls="collapseThree"
                        >
                            我向用户推荐试用订阅后，为什么没有收到佣金？
                        </a>
                    </div>
                    <div
                        id="collapseThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingCuriousThree"
                        data-bs-parent="#accordionFAQ"
                    >
                        <div class="accordion-body">
                            试用订阅我们实际未产生真正收益，所以请勿向用户推荐标注有试用字样的订阅。向用户推荐试用订阅您将无法获得佣金。
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <div
                        class="accordion-header"
                        id="headingCuriousFour"
                    >
                        <a
                            class="accordion-button collapsed"
                            role="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseFour"
                            aria-expanded="false"
                            aria-controls="collapseFour"
                        >
                            我的佣金为什么不能购买订阅？
                        </a>
                    </div>
                    <div
                        id="collapseFour"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingCuriousFour"
                        data-bs-parent="#accordionFAQ"
                    >
                        <div class="accordion-body">
                            为避免冲突，账户的余额分为两种，一种为余额账户，一种为佣金账户。您赚取的佣金将会下发到佣金账户，需要将佣金账户中的金额划转到余额账户才能正常使用。
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div
        class="bg-dark"
        style="background-image: url(assets/svg/components/wave-pattern-light.svg);"
    >
        <div class="container content-space-2">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-md mb-5 mb-md-0">
                    <h2 class="text-white fw-light mb-0">加入 {{$title}}，一起探索新世界</h2>
                </div>

                <div class="col-md-auto">
                    <div class="d-grid d-sm-flex gap-3">
                        <a
                            class="btn btn-light btn-transition"
                            href="contact-us "
                        >联系我们</a>
                        <a
                            class="btn btn-ghost-light btn-transition"
                            href="/user#/register"
                        >立即试用 <i class="bi-chevron-right small ms-1"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </div>

</main>

@include('footer')