@include('header')

<title>常见问题 - 高速网络,企业服务 &amp; 匿名安全 高可用性服务商 | {{$title}}</title>
<meta
    property="og:title"
    content="常见问题 - 高速网络,企业服务 &amp; 匿名安全 高可用性服务商 | {{$title}}"
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
                <h1 class="fw-light">关于 {{$title}} 的常见问题及解答</h1>
                <p>常见问题解答作为 {{$title}} 条款和条件的解释和补充，但在与最新条款和条件冲突时，以 {{$title}} 条款和条件为准。</p>
                <p>对 FAQ 内容的解释和解读以 {{$title}} 支持人员的回复为准。</p>
            </div>
        </div>
    </div>


    <div class="container content-space-2 content-space-b-lg-3">
        <div class="w-lg-75 mx-lg-auto">
            <div class="d-grid gap-10">
                <div class="d-grid gap-3">
                    <h2>数据传输</h2>

                    <div
                        class="accordion accordion-flush accordion-lg"
                        id="accordionDT"
                    >

                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingDT-1"
                            >
                                <a
                                    class="accordion-button"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseDT-1"
                                    aria-expanded="true"
                                    aria-controls="collapseDT-1"
                                >
                                    什么是流量配额？
                                </a>
                            </div>
                            <div
                                id="collapseDT-1"
                                class="accordion-collapse collapse show"
                                aria-labelledby="headingDT-1"
                                data-bs-parent="#accordionDT"
                            >
                                <div class="accordion-body">
                                    <p>流量配额是指 {{$title}} 订阅分配的最大数据传输量（流量），上传及下载流量均会计算在内，当流量配额用尽后，您将无法使用 {{$title}}
                                        订阅提供的服务。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingDT-2"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseDT-2"
                                    aria-expanded="false"
                                    aria-controls="collapseDT-2"
                                >
                                    流量配额每月会被重置吗？
                                </a>
                            </div>
                            <div
                                id="collapseDT-2"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingDT-2"
                                data-bs-parent="#accordionDT"
                            >
                                <div class="accordion-body">
                                    <p>如果没有特殊声明，所有 {{$title}} 流量配额均会在每月自动重置。</p>
                                    <p>{{$title}} 订阅流量配额的重置日期不是每月 1 日，而是您在 {{$title}} 购买订阅的日期。例如您在本月 10
                                        日购买的订阅，那么您的订阅下次流量配额重置日期是下月 10 日。</p>
                                    <p>如果您在已购订阅未到期的情况下更换了订阅，如无特殊声明，那么您的新订阅的流量配额重置日期会变为下月同日，且已使用流量无法立即重置，您需要等下月同日才能自动重置。例如您在本月
                                        20 日更换了新订阅，那么您的新订阅下次流量重置日期为下月 20 日。</p>
                                    <p>您可以在 {{$title}} 管理面板中查看当前订阅距离下一次流量配额重置还要多长时间。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingDT-3"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseDT-3"
                                    aria-expanded="false"
                                    aria-controls="collapseDT-3"
                                >
                                    我可以为当月增加流量包配额吗？
                                </a>
                            </div>
                            <div
                                id="collapseDT-3"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingDT-3"
                                data-bs-parent="#accordionDT"
                            >
                                <div class="accordion-body">
                                    <p>不可以，{{$title}} 当前不支持弹性流量包。如果您超出了订阅的流量配额，您只能等待流量配额自动重置，或选择付费重置流量配额。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingD-4"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseDT-4"
                                    aria-expanded="false"
                                    aria-controls="collapseDT-4"
                                >
                                    我可以手动重置流量配额吗？
                                </a>
                            </div>
                            <div
                                id="collapseDT-4"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingDT-4"
                                data-bs-parent="#accordionDT"
                            >
                                <div class="accordion-body">
                                    <p>可以，每当流量不足时，您可以转至 {{$title}}
                                        控制台中的「我的订阅」上方点击重置，完成付费重置流量操作，您已使用的流量将被完全清空。如无特殊声明，流量费用将按照订阅月费用的9折收取。不限重置次数。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingDT-5"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseDT-5"
                                    aria-expanded="false"
                                    aria-controls="collapseDT-5"
                                >
                                    我可以通过续费提前重置流量配额吗？
                                </a>
                            </div>
                            <div
                                id="collapseDT-5"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingDT-5"
                                data-bs-parent="#accordionDT"
                            >
                                <div class="accordion-body">
                                    <p>不可以。续费购买的是订阅使用期限，不是每月的流量配额。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingDT-6"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseDT-6"
                                    aria-expanded="false"
                                    aria-controls="collapseDT-6"
                                >
                                    流量配额可以结转到下月吗？
                                </a>
                            </div>
                            <div
                                id="collapseDT-6"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingDT-6"
                                data-bs-parent="#accordionDT"
                            >
                                <div class="accordion-body">
                                    <p>不可以。我们不设置流量结转功能。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingDT-7"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseDT-7"
                                    aria-expanded="false"
                                    aria-controls="collapseDT-7"
                                >
                                    流量倍率是什么？
                                </a>
                            </div>
                            <div
                                id="collapseDT-7"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingDT-7"
                                data-bs-parent="#accordionDT"
                            >
                                <div class="accordion-body">
                                    <p>流量倍率是指一个数据包经过 {{$title}} 网络时将被计算的比率。</p>
                                    <p>例如，您使用一个 0.5 倍率的接入点，那么您使用该接入点消耗了实际 1GiB 流量时，那么在 {{$title}} 中将会被计算为
                                        512MiB。同理，您使用一个 10 倍率的接入点，那么您使用该接入点消耗了实际 1GiB 流量时，那么在 {{$title}} 中将会被计算为 10GiB。
                                    </p>
                                    <p>如果您的流量配额为 30GiB，您只用 0.5 倍率的接入点，那么理论上每月您最多可以通过 {{$title}} 网络传输 60GiB 数据。同理，如果您只使用
                                        10 倍率的接入点，那么理论上每月您最多可以通过 {{$title}} 网络传输 3 GiB 数据。当然，您使用倍率为 0 的接入点传输任何数据都不会被计费。
                                    </p>
                                    <p>{{$title}} 流量倍率的制定是根据接入点服务器总流量配额、带宽及运营成本、业务承受能力等综合评估的，流量倍率的高低并不代表该接入点速率的快慢和好坏。
                                    </p>
                                    <p>请注意，{{$title}} 有权在不通知您的情况下，随时修改一个接入点的流量倍率。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingDT-8"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseDT-8"
                                    aria-expanded="false"
                                    aria-controls="collapseDT-8"
                                >
                                    我可以在流量配额完全用尽后继续使用 0 倍率接入点吗？
                                </a>
                            </div>
                            <div
                                id="collapseDT-8"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingDT-8"
                                data-bs-parent="#accordionDT"
                            >
                                <div class="accordion-body">
                                    <p>不可以，当您的 {{$title}} 订阅流量配额完全用尽后，订阅中的所有接入点都将不再向您提供服务。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingDT-9"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseDT-9"
                                    aria-expanded="false"
                                    aria-controls="collapseDT-9"
                                >
                                    访问中国境内的资源会不会计算流量？
                                </a>
                            </div>
                            <div
                                id="collapseDT-9"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingDT-9"
                                data-bs-parent="#accordionDT"
                            >
                                <div class="accordion-body">
                                    <p>{{$title}} 并不设置分流功能。无论中国境内还是境外，只要数据包经过 {{$title}} 接入点，都会消耗 {{$title}}
                                        的计算能力和带宽资源，所以都会被计算流量。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingDT-10"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseDT-10"
                                    aria-expanded="false"
                                    aria-controls="collapseDT-10"
                                >
                                    {{$title}} 会提供流量明细吗？
                                </a>
                            </div>
                            <div
                                id="collapseDT-10"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingDT-10"
                                data-bs-parent="#accordionDT"
                            >
                                <div class="accordion-body">
                                    <p>{{$title}} 会提供详细的流量使用记录。您可以在 {{$title}} 控制台的「流量明细」中查看您具体的流量明细。</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="d-grid gap-3">
                    <h2>订阅使用</h2>

                    <div
                        class="accordion accordion-flush accordion-lg"
                        id="accordionSubs"
                    >

                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingSubs-1"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSubs-1"
                                    aria-expanded="false"
                                    aria-controls="collapseSubs-1"
                                >
                                    我该如何购买订阅？
                                </a>
                            </div>
                            <div
                                id="collapseSubs-1"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingSubs-1"
                                data-bs-parent="#accordionSubs"
                            >
                                <div class="accordion-body">
                                    <p>您需要先在 {{$title}} 上注册一个账户，然后直接购买新订阅即可。您可以通过支付宝国际、微信向我们付款。对于国际客户，您还可以联系客服，通过
                                        Paypal、国际信用卡（MasterCard 和 Visa）付款。收款方可能会向您收取一定的手续费用。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingSubs-2"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSubs-2"
                                    aria-expanded="false"
                                    aria-controls="collapseSubs-2"
                                >
                                    每个人可以购买多少个订阅？
                                </a>
                            </div>
                            <div
                                id="collapseSubs-2"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingSubs-2"
                                data-bs-parent="#accordionSubs"
                            >
                                <div class="accordion-body">
                                    <p>每个账户限制只能保有 1 个订阅。如果您需要开通多个订阅，您可以注册多个账户进行购买。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingSubs-3"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSubs-3"
                                    aria-expanded="false"
                                    aria-controls="collapseSubs-3"
                                >
                                    我可以随时变更订阅吗？
                                </a>
                            </div>
                            <div
                                id="collapseSubs-3"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingSubs-3"
                                data-bs-parent="#accordionSubs"
                            >
                                <div class="accordion-body">
                                    <p>是的，您可以随时变更订阅，老套餐的剩余订阅时长与流量会直接清零。很抱歉，我们不得不这样，为防止滥用。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingSubs-4"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSubs-4"
                                    aria-expanded="false"
                                    aria-controls="collapseSubs-4"
                                >
                                    我可以将订阅分享给他人使用吗？
                                </a>
                            </div>
                            <div
                                id="collapseSubs-4"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingSubs-4"
                                data-bs-parent="#accordionSubs"
                            >
                                <div class="accordion-body">
                                    <p>可以，我们是按照流量计费，目前发展阶段不考虑限制用户设备数量，您可以随意分享，但是我们禁止转卖订阅。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingSubs-5"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSubs-5"
                                    aria-expanded="false"
                                    aria-controls="collapseSubs-5"
                                >
                                    我可以在多个设备上使用吗？
                                </a>
                            </div>
                            <div
                                id="collapseSubs-5"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingSubs-5"
                                data-bs-parent="#accordionSubs"
                            >
                                <div class="accordion-body">
                                    <p>您理论可以在无限台设备上使用，目前发展阶段不考虑限制用户设备数量。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingSubs-6"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSubs-6"
                                    aria-expanded="false"
                                    aria-controls="collapseSubs-6"
                                >
                                    我可以使用 {{$title}} 订阅进行 BT/PT 上传/下载吗？
                                </a>
                            </div>
                            <div
                                id="collapseSubs-6"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingSubs-6"
                                data-bs-parent="#accordionSubs"
                            >
                                <div class="accordion-body">
                                    <p>不可以。我们无法判断 BitTorrent 协议传输的内容是否违反资源的最终用户许可协议(EULA)或者数字千年版权法(DMCA)，所以我们严禁在
                                        {{$title}} 网络上使用 BitTorrent 协议。</p>
                                    <p>有部分软件及游戏启动器的下载加速也使用了 BitTorrent 协议，请在使用这些可能使用 BitTorrent 协议的软件之前，停止使用 {{$title}}
                                        订阅，以免被误判。</p>
                                    <p>此外，BitTorrent 会严重占用服务器资源，这也违反了我们的公平使用原则。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingSubs-7"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSubs-7"
                                    aria-expanded="false"
                                    aria-controls="collapseSubs-7"
                                >
                                    我可以使用 {{$title}} 订阅玩游戏吗？
                                </a>
                            </div>
                            <div
                                id="collapseSubs-7"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingSubs-7"
                                data-bs-parent="#accordionSubs"
                            >
                                <div class="accordion-body">
                                    <p>当然可以。我们并不限制您使用 {{$title}}
                                        订阅加速游戏，但我们的服务并未对游戏做了优化，这可能无法让您得到最佳体验，包括在高峰期可能的高延迟、延迟抖动或丢包。这一般不影响网页浏览、访问流媒体、下载，但对实时性要求较高的游戏可能有较大影响。
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingSubs-8"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSubs-8"
                                    aria-expanded="false"
                                    aria-controls="collapseSubs-8"
                                >
                                    我可以在自动化程序上使用订阅吗？
                                </a>
                            </div>
                            <div
                                id="collapseSubs-8"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingSubs-8"
                                data-bs-parent="#accordionSubs"
                            >
                                <div class="accordion-body">
                                    <p>不可以。我们禁止将订阅用于任何自动化程序，例如爬虫、机器人程序、人工智能、自动交易等。这违反了我们的公平使用原则。</p>
                                    <p>{{$title}} 订阅仅限人类使用。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingSubs-9"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSubs-9"
                                    aria-expanded="false"
                                    aria-controls="collapseSubs-9"
                                >
                                    我可以浏览非法网站或在网上发表自己的政治意见吗？
                                </a>
                            </div>
                            <div
                                id="collapseSubs-9"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingSubs-9"
                                data-bs-parent="#accordionSubs"
                            >
                                <div class="accordion-body">
                                    <p>您在使用 {{$title}} 订阅访问网站或某些资源时，不得违反接入点所在国家或地区的法律法规。您不可以使用 {{$title}}
                                        访问某些包含宣传极端政治、邪教、恐怖主义、儿童色情或某些内容上在大多数国家中属于犯罪行为的网站或资源。</p>
                                    <p>除此之外，我们虽然尽可能地保障您自由的权利，但由于我们的部分工作人员仍然定居在中国境内，您在国际互联网上使用我们的服务发表自己对中国的政治意见时，可能会让我们的部分境内工作人员陷入麻烦，或导致部分境内接入服务器被迫关停影响其他用户使用，所以我们不允许您使用我们的服务发表影响中国的政治意见。
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="d-grid gap-3">
                    <h2>{{$title}} API 订阅</h2>

                    <div
                        class="accordion accordion-flush accordion-lg"
                        id="accordionApi"
                    >

                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingApi-1"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseApi-1"
                                    aria-expanded="false"
                                    aria-controls="collapseApi-1"
                                >
                                    什么是 {{$title}} API 订阅？
                                </a>
                            </div>
                            <div
                                id="collapseApi-1"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingApi-1"
                                data-bs-parent="#accordionApi"
                            >
                                <div class="accordion-body">
                                    <p>{{$title}} API 订阅是 {{$title}} 提供的一套可在多个客户端上使用的通用应用程序接口。</p>
                                    <p>API 支持多种客户端以及一些客户端的自动配置协议，这意味着您可以通过仅仅点击一次或几个简单步骤来快速完成客户端的配置而无需手动设置客户端并填写配置文件。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingApi-2"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseApi-2"
                                    aria-expanded="false"
                                    aria-controls="collapseApi-2"
                                >
                                    如何使用 API 订阅？
                                </a>
                            </div>
                            <div
                                id="collapseApi-2"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingApi-2"
                                data-bs-parent="#accordionApi"
                            >
                                <div class="accordion-body">
                                    <p>请参考我们的使用文档，了解如何在受支持的客户端上使用 API 订阅。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingApi-3"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseApi-3"
                                    aria-expanded="false"
                                    aria-controls="collapseApi-3"
                                >
                                    我不小心泄露了 API 订阅的 URL 链接，该怎么办？
                                </a>
                            </div>
                            <div
                                id="collapseApi-3"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingApi-3"
                                data-bs-parent="#accordionApi"
                            >
                                <div class="accordion-body">
                                    <p>请转至 {{$title}} 管理面板中的「我的订阅」，点击「操作」下拉菜单中的「重置订阅信息」按钮，重置您的 API 订阅。</p>
                                    <p>请务必妥善保管好您的 API 订阅。无论是您主动分享订阅信息亦或者被他人盗用，造成的后果均由您自行承担。</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="d-grid gap-3">
                    <h2>账户</h2>

                    <div
                        class="accordion accordion-flush accordion-lg"
                        id="accordionAccount"
                    >

                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingAccount-1"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseAccount-1"
                                    aria-expanded="false"
                                    aria-controls="collapseAccount-1"
                                >
                                    我忘记了我的账户或密码，该怎么办？
                                </a>
                            </div>
                            <div
                                id="collapseAccount-1"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingAccount-1"
                                data-bs-parent="#accordionAccount"
                            >
                                <div class="accordion-body">
                                    <p>如果您忘记了您的密码，请点击 {{$title}} 管理面板登录页下方的「忘记密码」选项，然后输入您在 {{$title}}
                                        上的注册邮箱，然后点击「发送」按钮，系统会发送一封验证码给您，然后您便可重置您的密码。</p>
                                    <p>如果您遗忘了您在 {{$title}} 上的注册邮箱，请加入我们的 Telegram 群组，联系工作人员处理。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingAccount-2"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseAccount-2"
                                    aria-expanded="false"
                                    aria-controls="collapseAccount-2"
                                >
                                    我该如何删除我的账户？
                                </a>
                            </div>
                            <div
                                id="collapseAccount-2"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingAccount-2"
                                data-bs-parent="#accordionAccount"
                            >
                                <div class="accordion-body">
                                    <p>目前尚不支持您自主删除您的账户。如果您决定不再使用我们的服务，请联系我们的工作人员删除您的账户。</p>
                                    <p>请注意您在删除账户后，您在 {{$title}}
                                        上的任何资料都将被完全删除，且无法恢复，包括已开通的订阅或尚未用完的账户余额等，请再三确认后再向我们要求删除账户。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingAccount-3"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseAccount-3"
                                    aria-expanded="false"
                                    aria-controls="collapseAccount-3"
                                >
                                    我的账户余额可以用来干什么？
                                </a>
                            </div>
                            <div
                                id="collapseAccount-3"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingAccount-3"
                                data-bs-parent="#accordionAccount"
                            >
                                <div class="accordion-body">
                                    <p>您的账户余额可以用于支付订阅续期费用、重置流量、购买新订阅，但账户余额无法用于提现，包括但不限于 Paypal、支付宝、微信等。</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="accordion-header"
                                id="headingAccount-4"
                            >
                                <a
                                    class="accordion-button collapsed"
                                    role="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseAccount-4"
                                    aria-expanded="false"
                                    aria-controls="collapseAccount-4"
                                >
                                    我可以申请退款吗？
                                </a>
                            </div>
                            <div
                                id="collapseAccount-4"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingAccount-4"
                                data-bs-parent="#accordionAccount"
                            >
                                <div class="accordion-body">
                                    <p>基于防滥用原则，我们尚不支持退款。但您可以要求我们将您当前的剩余订阅按比例退款至余额账户中。</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container content-space-2 content-space-lg-1">
        <div class="w-lg-75 mx-lg-auto">
            <div class="row">
                <div
                    class="col-md-6 mb-3 mb-lg-0"
                    data-aos="fade-up"
                >

                    <a
                        class="card card-transition h-100"
                        href="./contact-us "
                    >
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <span class="svg-icon text-primary">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                opacity="0.3"
                                                d="M8 8C8 7.4 8.4 7 9 7H16V3C16 2.4 15.6 2 15 2H3C2.4 2 2 2.4 2 3V13C2 13.6 2.4 14 3 14H5V16.1C5 16.8 5.79999 17.1 6.29999 16.6L8 14.9V8Z"
                                                fill="#035A4B"
                                            ></path>
                                            <path
                                                d="M22 8V18C22 18.6 21.6 19 21 19H19V21.1C19 21.8 18.2 22.1 17.7 21.6L15 18.9H9C8.4 18.9 8 18.5 8 17.9V7.90002C8 7.30002 8.4 6.90002 9 6.90002H21C21.6 7.00002 22 7.4 22 8ZM19 11C19 10.4 18.6 10 18 10H12C11.4 10 11 10.4 11 11C11 11.6 11.4 12 12 12H18C18.6 12 19 11.6 19 11ZM17 15C17 14.4 16.6 14 16 14H12C11.4 14 11 14.4 11 15C11 15.6 11.4 16 12 16H16C16.6 16 17 15.6 17 15Z"
                                                fill="#035A4B"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h4 class="card-title">咨询我们</h4>
                                    <p class="card-text text-body">如果您还有其它问题，欢迎咨询我们</p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

                <div
                    class="col-md-6 mb-3 mb-lg-0"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >

                    <a
                        class="card card-transition h-100"
                        href="/user#/knowledge"
                        rel="noopener noreferrer"
                    >
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <span class="svg-icon text-primary">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                opacity="0.3"
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M4.85714 1H11.7364C12.0911 1 12.4343 1.12568 12.7051 1.35474L17.4687 5.38394C17.8057 5.66895 18 6.08788 18 6.5292V19.0833C18 20.8739 17.9796 21 16.1429 21H4.85714C3.02045 21 3 20.8739 3 19.0833V2.91667C3 1.12612 3.02045 1 4.85714 1ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z"
                                                fill="#035A4B"
                                            ></path>
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M6.85714 3H14.7364C15.0911 3 15.4343 3.12568 15.7051 3.35474L20.4687 7.38394C20.8057 7.66895 21 8.08788 21 8.5292V21.0833C21 22.8739 20.9796 23 19.1429 23H6.85714C5.02045 23 5 22.8739 5 21.0833V4.91667C5 3.12612 5.02045 3 6.85714 3ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z"
                                                fill="#035A4B"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h4 class="card-title">阅读文档</h4>
                                    <p class="card-text text-body">阅读使用文档，了解我们的客户端如何使用</p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

            </div>

        </div>
    </div>

</main>

@include('footer')