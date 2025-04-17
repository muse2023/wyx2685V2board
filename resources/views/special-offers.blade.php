@include('header')

<title>特别优惠 - 高速网络,企业服务 &amp; 匿名安全 高可用性服务商 | {{$title}}</title>
<meta
    property="og:title"
    content="特别优惠 - 高速网络,企业服务 &amp; 匿名安全 高可用性服务商 | {{$title}}"
>
<main
    id="content"
    role="main"
>

    <div class="gradient-y-sm-primary position-relative zi-2 overflow-hidden">
        <div class="container position-relative content-space-t-3 content-space-t-lg-4 content-space-b-2">

            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <h1 class="display-4 fw-light mb-3">特别优惠</h1>
                <p class="lead">以下是我们为您准备的特别优惠</p>
            </div>

            <div class="content-space-t-5 content-space-lg-2"></div>

            <figure
                class="position-absolute zi-n1"
                style="top: -35rem; left: 50rem; width: 62rem; height: 62rem;"
            >
                <svg
                    preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg"
                    x="0px"
                    y="0px"
                    viewBox="0 0 260 260"
                >
                    <circle
                        fill="#e7eaf3"
                        opacity=".7"
                        cx="130"
                        cy="130"
                        r="130"
                    />
                </svg>
            </figure>


            <figure
                class="position-absolute zi-n1"
                style="top: 15rem; left: 70rem; width: 20rem; height: 20rem;"
            >
                <img
                    class="img-fluid"
                    src="/assets/svg/components/circled-stripe.svg"
                    alt="Image Description"
                >
            </figure>


            <figure
                class="position-absolute zi-n1"
                style="bottom: 11rem; left: -3rem; width: 15rem; height: 15rem;"
            >
                <img
                    class="img-fluid"
                    src="/assets/svg/components/happy-birthday-1.svg"
                    alt="Image Description"
                >
            </figure>

        </div>

        <div class="shape shape-bottom zi-1">
            <svg
                width="3000"
                height="500"
                viewBox="0 0 3000 500"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M0 500H3000V0L0 500Z"
                    fill="#fff"
                />
            </svg>
        </div>

    </div>


    <div class="container content-space-2">

        <div class="w-lg-85 text-center mx-lg-auto mb-5 mb-md-9">
            <h2>优惠券</h2>
            <p>我们会不定时发放优惠券 快来试试下面的优惠券吧！</p>
        </div>


        <div class="w-lg-85 mx-lg-auto">
            <div class="card card-sm overflow-hidden">

                <div class="card-body">
                    <div class="row justify-content-md-start align-items-md-center text-center text-md-start">
                        <div class="col-md-5 offset-md-3 mb-3 mb-md-0">
                            <h4 class="card-title">新用户九折！</h4>
                        </div>
                        <div class="col-md-auto">

                            <button
                                type="button"
                                class="btn btn-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#usepromo-1"
                            >
                                查看优惠券
                            </button>

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

        <div
            class="modal fade"
            id="usepromo-1"
            tabindex="-1"
            role="dialog"
            aria-labelledby="usepromolabel-1"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-dialog-centered"
                role="document"
            >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5
                            class="modal-title"
                            id="usepromolabel-1"
                        >使用该优惠券，用户首次九折优惠！</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">

                        </body>

                        </html>


                        <div class="input-group mb-4">
                            <input
                                id='special-offers1'
                                type="text"
                                class="form-control"
                                value="happy90%"
                                readonly
                            >
                        </div>
                        <div class="pt-3 pb-5">
                            <button
                                id='copy'
                                class="btn btn-primary btn-block js-clipboard font-weight-normal"
                                onclick=copy()
                            >复制到剪贴板|有效期无限</button>
                            <script>
                                function copy() {
                                    var text = document.getElementById('special-offers1');
                                    var copy = document.getElementById('copy');
                                    text.select();
                                    document.execCommand("copy");
                                    copy.focus();
                                    alert("优惠码复制成功")
                                }
                            </script>

                            <a
                                class="btn btn-ghost-primary btn-transition"
                                href="/user/#plan"
                            >前去下单 <i class="bi-chevron-right small ms-1"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="w-lg-85 mx-lg-auto mt-3">
            <div class="card card-sm overflow-hidden">

                <div class="card-body">
                    <div class="row justify-content-md-start align-items-md-center text-center text-md-start">
                        <div class="col-md-5 offset-md-3 mb-3 mb-md-0">
                            <h4 class="card-title">中秋优惠！</h4>
                        </div>
                        <div class="col-md-auto">
                            <a class="btn btn-primary btn-transition" href="special-offers #" data-bs-toggle="modal" data-bs-target="#usepromo-2">查看优惠券</a>
                        </div>
                    </div>

                    <figure class="w-25 d-none d-md-block position-absolute top-0 start-0 mt-n2">
                        <img class="card-img" src="/assets/svg/illustrations/apps.svg" alt="Image Description">
                    </figure>

                </div>

            </div>
        </div>

        <div class="modal fade" id="usepromo-2" tabindex="-1" role="dialog" aria-labelledby="usepromolabel-2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="usepromolabel-2">使用优惠券，结账时可享优惠！</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="input-group mb-4">
                            <input id='special-offers2' type="text" class="form-control" value="MidAutumn60" readonly>
                        </div>
                        <div class="pt-3 pb-5">
                            <button id='copy2' class="btn btn-primary btn-block js-clipboard font-weight-normal" onclick=copy2()>复制到剪贴板|年付优惠</button>
                            <script>
                                function copy2() {
                                    var text = document.getElementById('special-offers2');
                                    var copy = document.getElementById('copy2');
                                    text.select();
                                    document.execCommand("copy");
                                    copy.focus();
                                    alert("优惠码复制成功")
                                }
                            </script>

                            <a class="btn btn-ghost-primary btn-transition" href="/user/#plan">前去下单 <i class="bi-chevron-right small ms-1"></i></a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="usepromolabel-2">使用优惠券，结账时可享优惠！</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="input-group mb-4">
                            <input id='special-offers2' type="text" class="form-control" value="MidAutumn60" readonly>
                        </div>
                        <div class="pt-3 pb-5">
                            <button id='copy2' class="btn btn-primary btn-block js-clipboard font-weight-normal" onclick=copy2()>复制到剪贴板|年付优惠</button>
                            <script>
                                function copy2() {
                                    var text = document.getElementById('special-offers2');
                                    var copy = document.getElementById('copy2');
                                    text.select();
                                    document.execCommand("copy");
                                    copy.focus();
                                    alert("优惠码复制成功")
                                }
                            </script>

                            <a class="btn btn-ghost-primary btn-transition" href="/user/#plan">前去下单 <i class="bi-chevron-right small ms-1"></i></a>
                        </div>

                    </div>
                </div>
            </div>

            
        </div> -->


    </div>


    <div class="overflow-hidden">
        <div
            class="container content-space-2 content-space-lg-3"
            id="free"
        >
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-lg-6 mb-9 mb-lg-0">
                    <div
                        class="position-relative mx-auto"
                        style="max-width: 20rem;"
                    >

                        <figure class="device-mobile mx-auto">
                            <div class="device-mobile-frame">
                                <img
                                    class="device-mobile-img"
                                    src="/assets/img/407x867/img5.jpg"
                                    alt="Image Description"
                                >
                            </div>
                        </figure>


                        <div
                            class="position-absolute top-0 end-0 zi-2 me-n10 mt-9"
                            style="width: 16rem;"
                        >
                            <img
                                class="img-fluid shadow-lg rounded-2"
                                src="/assets/img/407x115/shadowrocket-sub-1.jpg"
                                alt="Image Description"
                            >
                        </div>


                        <div
                            class="position-absolute bottom-0 start-0 zi-2 ms-n10 mb-10"
                            style="width: 16rem;"
                        >
                            <img
                                class="img-fluid shadow-lg rounded-2"
                                src="/assets/img/480x320/img33.jpg"
                                alt="Image Description"
                            >
                        </div>


                        <div
                            class="position-absolute bottom-0 end-0 zi-n1 mx-auto"
                            style="width: 20rem;"
                        >
                            <img
                                class="img-fluid"
                                src="/assets/svg/components/shape-1.svg"
                                alt="SVG"
                            >
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">

                    <div class="mb-5">
                        <h2>获取故障支援Plus
                            <sapn style="color:#377dff">年费特权</sapn>
                        </h2>
                    </div>
                    <ul class="step step-dashed mb-7">
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-xs step-icon-soft-primary">1</span>
                                <div class="step-content">
                                    <h4 class="step-title">购买全站任何订阅</h4>
                                    <p>只要您订购了我们的全球加速服务，并且付款周期大于等于一周年，您就可以发起工单/联系管理获取解决故障思路，高优先级的故障解决时效。</p>
                                </div>
                            </div>
                        </li>
                        <li class="step-item mb-0">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-xs step-icon-soft-primary">2</span>
                                <div class="step-content">
                                    <h4 class="step-title">向我们提出问题！</h4>
                                    <p class="mb-0">我们鼓励用户发现，提出优化建议，对于这样的好朋友，我们会为你免费赠送流量，提高返利比例，或者是循环返利，感谢你们的支持！</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <a
                        class="btn btn-primary btn-transition"
                        href="contact-us "
                    >联系我们</a>
                </div>

            </div>

        </div>
    </div>


    <div class="container content-space-1 content-space-lg-2">

        <div class="w-lg-50 text-center mx-lg-auto mb-5 mb-md-9">
            <h2>常见问题</h2>
        </div>

        <div class="w-lg-75 mx-lg-auto">
            <div class="row">
                <div class="col-md-12 mb-3 mb-md-5">
                    <div>
                        <h4>促销活动将持续多长时间？</h4>
                        <p>此页面上的促销活动限时提供，所以在活动过期为时已晚之前赶快行动吧！</p>
                    </div>
                </div>
                <div class="col-md-12 mb-3 mb-md-5">
                    <div>
                        <h4>如果我已经有了一个账户了，我可以注册新账户参加新用户优惠活动吗？</h4>
                        <p>不可以。每位客户仅可参加一次促销活动。如果我们发现您恶意参加活动，我们将视其为欺诈，并删除涉及您名下的所有账户且不退款。</p>
                    </div>
                </div>
                <div class="col-md-12 mb-3 mb-md-5">
                    <div>
                        <h4>谁有资格使用新用户注册优惠券？</h4>
                        <p>任何刚刚接触 {{$title}} 且未产生实际支付账单的人都可以使用新用户优惠券。现有客户不符合条件。</p>
                    </div>
                </div>
                <div class="col-md-12 mb-3 mb-md-5">
                    <div>
                        <h4>优惠券可使用几次？</h4>
                        <p>一般情况下，优惠券每位客户仅可使用一次。建议您选择按年支付，可获得最大力度优惠。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div
        class="bg-dark"
        style="background-image: url(/assets/svg/components/wave-pattern-light.svg);"
    >
        <div class="container content-space-2">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-md mb-5 mb-md-0">
                    <h2 class="text-white fw-light mb-0">想要获得更大幅度的优惠？</h2>
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
                        >注册账户 <i class="bi-chevron-right small ms-1"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </div>

</main>
@include('footer')