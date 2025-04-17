@include('header')

<title>服务水平保障协议 - 高速网络,企业服务 &amp; 匿名安全 高可用性服务商 | {{$title}}</title>
<meta
  property="og:title"
  content="服务水平保障协议 - 高速网络,企业服务 &amp; 匿名安全 高可用性服务商 | {{$title}}"
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
      <div class="w-md-80 w-lg-60 text-center mx-md-auto">
        <h1 class="fw-light">{{$title}} 服务水平保障协议 (SLA)</h1>
        <p>{{$title}} 云互联服务水平保障协议，请您仔细阅读本协议。</p>
        <p>最后修改：2022-01-20</p>
      </div>
    </div>
  </div>


  <div class="container content-space-1 content-space-md-3">
    <div class="row">
      <div class="col-md-4 col-lg-3 mb-3 mb-md-0">

        <div class="navbar-expand-md">

          <div class="d-grid">
            <button
              type="button"
              class="navbar-toggler btn btn-white mb-3"
              data-bs-toggle="collapse"
              data-bs-target="#navbarVerticalNavMenu"
              aria-label="Toggle navigation"
              aria-expanded="false"
              aria-controls="navbarVerticalNavMenu"
            >
              <span class="d-flex justify-content-between align-items-center">
                <span class="text-dark">Menu</span>
                <span class="navbar-toggler-default">
                  <i class="bi-list"></i>
                </span>
                <span class="navbar-toggler-toggled">
                  <i class="bi-x"></i>
                </span>
              </span>
            </button>
          </div>


          <div
            id="navbarVerticalNavMenu"
            class="collapse navbar-collapse"
          >
            <ul
              id="navbarSettings"
              class="js-sticky-block js-scrollspy nav nav-tabs nav-link-gray nav-vertical"
              data-hs-sticky-block-options='{
                   "parentSelector": "#navbarVerticalNavMenu",
                   "targetSelector": "#header",
                   "breakpoint": "md",
                   "startPoint": "#navbarVerticalNavMenu",
                   "endPoint": "#stickyBlockEndPoint",
                   "stickyOffsetTop": 80
                 }'
            >
              <li class="nav-item">
                <a
                  class="nav-link active"
                  href="#section-1"
                >1. 定义</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="#section-2"
                >2. 丢包与延迟</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="#section-3"
                >3. SLA 排除</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="#section-4"
                >4. 最高金额</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="#section-4"
                >5. 获取信用额度</a>
              </li>
            </ul>
          </div>

        </div>

      </div>

      <div class="col-md-8 col-lg-9">
        <div
          id="intro"
          class="mb-7"
        >
          <p>在执行 {{$title}} 许可协议（适用于“协议”）的期限内，涵盖服务将提供客户的每月正常运行时间百分比至少为 90%（“服务级目标”或“SLO”）。如果 {{$title}} 不符合 SLO
            规定，且客户履行了本 SLA 规定的义务，客户将有资格获得下述中断补偿。该 SLA 声明客户唯一和补救措施唯一，如果 {{$title}} 不符合 SLO 规定。本 SLA 中使用的但不在本 SLA
            中定义的术语具有协议中阐述的含义。</p>
        </div>
        <div
          id="section-1"
          class="mb-7"
        >
          <h4>定义</h4>
          <p>以下定义适用于 {{$title}} 云互联服务 SLA：</p>
          <ul>
            <li>“<strong>涵盖服务</strong>”是指：{{$title}} 在 {{$title}} 中提供的云互联服务，或 {{$title}} 可能提供的其他 URL 中提供的云互联服务。</li>
            <li>“<strong>中断</strong>”意味着超过 30 分钟的无响应。</li>
            <li>“<strong>中断时长</strong>”是指：由于 {{$title}} 的系统故障，在同一区域的两个或多个区域中正确配置的所有接入点无法提供指向其接入点的任何流量，以及无法切换到该区域中其它接入点。
            </li>
            <li>“<strong>中断时长</strong>”是指：一个时间段内连续 30 分钟的停机时间。不到 30 分钟的间歇中断时间不会计入任何中断时间。</li>
            <li>“<strong>每月正常运行时间百分比</strong>”是指：(该月的总分钟数 - 该月内所有中断时长) / 该月的总分钟数。</li>
          </ul>
        </div>
        <div
          id="section-2"
          class="mb-7"
        >
          <h4>丢包与延迟</h4>
          <p>{{$title}}
            会主动监测各项服务的运行状况，在运营商出现网络抖动时会及时调整路由策略，并尽可能的减少由于网络抖动所带来的影响。但客户在实际使用中，仍然会受到客户的运营商路由策略、运营商网络调度、线缆信号、终端质量等多因素影响。
          </p>
          <p>由于上述原因，所以 {{$title}} 不将延迟作为 SLA 的保障。</p>
        </div>
        <div
          id="section-3"
          class="mb-7"
        >
          <h4>中断补偿</h4>
          <div class="table-responsive">
            <table class="table table-hover table-condensed">
              <thead>
                <tr>
                  <th>每月正常运行时间百分比</th>
                  <th>不符合 SLA 的赔偿百分比</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>100.00% - &lt;90.00%</td>
                  <td>不赔偿</td>
                </tr>
                <tr>
                  <td>90.00% - &lt;75.00%</td>
                  <td>10%流量</td>
                </tr>
                <tr>
                  <td>&lt;75.00%</td>
                  <td>20%流量</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div
          id="section-4"
          class="mb-7"
        >
          <h4>SLA 排除</h4>
          <p>这些保证适用于客户的每一个产品 / 服务，而不是适用于所有账单。以下情况不适用于该 SLA：</p>
          <ol>
            <li>指定为 Alpha 或 Beta 的服务（除非在相关文档中另有规定）</li>
            <li>排除在 SLA（在相关文档中）之外的功能</li>
            <li>由 {{$title}} 合理控制以外的因素造成的</li>
            <li>由客户的软件或硬件或第三方软件或硬件产生，或两者兼而有之</li>
            <li>违反协议的滥用或其他行为造成的</li>
            <li>由 {{$title}} 在书面介绍中明确告知不能提供 SLA 的</li>
            <li>{{$title}} 的服务正在维护，在指定位置发布通知客户后，但由于客户或客户网络的原因，导致未收到通知的</li>
            <li>非 {{$title}} 的主观因素造成的服务接入点高丢包与高延迟的</li>
          </ol>
        </div>
        <div
          id="section-5"
          class="mb-7"
        >
          <h4>最高金额</h4>
          <p>在单个结算月份内发生的任何和所有中断期间，{{$title}} 向客户发放的最高总信用额不得超过客户在适用月份的涵盖服务中应付的金额的 50%，信用额度将以账户余额的方式发放，并将在申请补偿后的 7 天内进行。
          </p>
        </div>
        <div
          id="section-6"
          class="mb-7"
        >
          <h4>获取信用额度</h4>
          <p>为了获取服务中断所提供的 SLA 补偿，客户应当提交一个工单到 {{$title}}，并明确要求获取相应的补偿。</p>
          <p>客户发送工单请求补偿时，需要提供所请求补偿的产品编号，并且在该工单中描述服务中断的问题和发生时间，中断时长（请参照上文）。</p>
          <p>只有购买 {{$title}} 书面说明受 SLA 保证的服务，才能向 {{$title}} 请求信用额度补偿。如果客户不符合这些要求，客户将丧失获得信用额度补偿的权利。如果针对此 SLA
            发生争议，{{$title}} 将根据其系统日志，监控报告，配置记录和其他可用信息进行真诚的决定，{{$title}} 将根据客户的要求向客户提供审核。</p>
        </div>

        <div id="stickyBlockEndPoint"></div>
        <p class="fst-italic">除非另有说明，本页面的内容是根据知识共享署名 3.0 许可协议授权的，代码示例按照 Apache 2.0 许可协议授权。</p>
      </div>

    </div>

  </div>

</main>

@include('footer')