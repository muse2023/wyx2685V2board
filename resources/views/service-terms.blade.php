@include('header')

<title>服务特定条款 - 高速网络,企业服务 &amp; 匿名安全 高可用性服务商 | {{$title}}</title>
<meta
  property="og:title"
  content="服务特定条款 - 高速网络,企业服务 &amp; 匿名安全 高可用性服务商 | {{$title}}"
>
<main
  id="content"
  role="main"
>

  <div
    class="bg-img-start"
    style="background-image: url(./assets/svg/components/card-11.svg);"
  >
    <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2">
      <div class="w-md-80 w-lg-60 text-center mx-md-auto">
        <h1 class="fw-light">{{$title}} 服务特定条款</h1>
        <p>最后修改：2020-03-01</p>
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
                  href="#setupAccount"
                >1. 账户设置</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="#payments"
                >2. 支付</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="#resourcesUse"
                >3. 资源使用</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="#guarantee"
                >4. 保障</a>
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
          <h4>{{$title}} 服务特定条款</h4>
          <p>以下条款仅适用于 {{$title}} 云互联服务</p>
        </div>
        <div
          id="setupAccount"
          class="mb-7"
        >
          <h4>1. 账户设置</h4>
          <ol>
            <li class="pb-2">
              注册账户时，客户将被要求填写登录账户（电子邮件）和密码。客户可以并只可以通过这样的用户标识和密码使用该服务或修改您的数据和内容。客户完全负责维护客户的用户名和密码的保密性以及使用这些凭据的所有活动的机密性。客户同意立即通知
              {{$title}} 当任何未经授权的访问使用客户的帐户或任何其他违反安全的情况。</li>
            <li class="pb-2">客户必须为我们提供一个主要的电子邮件地址，并保证其可用性。所有通知和 {{$title}}
              之间的通信将被发送到客户提供的电子邮件地址，因此，客户需要保持这个地址畅通，如果客户的地址更改，请通知 {{$title}}。如果客户的联系和/或帐单信息发生变化，您应该通知 {{$title}}，以便
              {{$title}} 可以更新客户的帐户。请确保 {{$title}} 的域名和其它 {{$title}} 所告知的邮件发送地址不包括在由客户或客户的邮件提供商使用的任何垃圾邮件阻止列表之内。</li>
            <li class="pb-2">提供任何种类的错误或不准确的联系信息，将导致 {{$title}} 无法正确提供应有的服务，此问题导致的服务中断不会获得 SLA
              保证；提供任何种类的虚假/欺诈信息，可能会导致客户的帐户被终止。</li>
            <li class="pb-2">客户负责其账户的所有活动及变更。因此，{{$title}} 强烈建议您设置严格的保密措施来保管文件、订阅、密码等。{{$title}}
              默认客户拥有管理其服务的技术能力。客户需要负责任何其账户更改导致的问题，包括但不限于造成任何网站、软件、设备的损失或损害。</li>
          </ol>
        </div>
        <div
          id="payments"
          class="mb-7"
        >
          <h4>2. 支付</h4>
          <ol>
            <li class="pb-2">支付服务涵盖了 {{$title}} 整个服务周期，并遵守本协议，除非客户的服务终止，{{$title}} 将会在客户的付款周期超时后删除客户的服务，这是一个自动过程并且不可逆转。
            </li>
            <li class="pb-2">除非客户和 {{$title}}
              特别协商，并经过书面协定，否则客户选择的服务的安装费用和循环付款费用，应在在线订购时作为初始费用一并支付，所有设置/安装费用和特殊设置费用不予退还。服务费用需要提前支付，没有及时支付服务费用时，客户的服务可能会暂时或者删除。
            </li>
            <li class="pb-2">在注册时，客户必须选择一个付款方式，{{$title}}
              保留与第三方签订协议来处理所有付款请求的权力。这样的第三方可能施加额外的条款和条件来管理支付处理。如果客户到期为及时支付所应支付的服务费用，{{$title}} 将保留权力在法律允许的范围内收取一定滞纳金的权力。
            </li>
            <li class="pb-2">客户同意支付任何由于使用本服务而造成的税款，包括个人所得税、增值税或销售税。{{$title}}
              不负责由于客户使用本服务并使用银行支票、信用卡、资金不足以及任何客户与客户的金融机构产生的任何费用。{{$title}}
              应该得到全额付款，如果由于税收、汇率差异、银行收费、转账收费等产生额外费用，客户需要自行支付。</li>
            <li class="pb-2">客户也同意支付从 {{$title}} 产生的任何律师费用、代收手续费和其他费用。同时，{{$title}} 不会退还任何安装费用、特殊设定费用、剩余的预付费费用。</li>
            <li class="pb-2">优惠卷和优惠码 – {{$title}} 会不定期提供优惠卷和优惠码，除特别声明外，这些优惠卷和优惠码只适用于首次购买的客户，假如客户已经订购了 {{$title}}
              服务后，这些优惠可能将不会生效。这些优惠卷和优惠码可能不会应用到客户升级当前可用的产品。任何客户试图滥用优惠卷和优惠码将会被暂停或删除账户。</li>
            <li class="pb-2">如您在购买时使用了您名下其它账户的推广链接，我们有权将该推广账户与购买账户一并做停用处理。</li>
          </ol>
        </div>
        <div
          id="resourcesUse"
          class="mb-7"
        >
          <h4>3. 资源使用</h4>
          <ol>
            <li class="pb-2"> {{$title}} 没有对每个账户可使用的系统资源及硬件设置限制。{{$title}}
              不会主动地停用客户的账户，除非它们大大超过可接受的使用水平，或者维持该客户的使用会严重影响其他客户的体验等。</li>
            <li class="pb-2">
              客户每月的数据传输量是由客户购买特定的服务或订阅来决定。如果客户的服务或订阅的使用量超过客户的每月限额，客户的服务将被暂停，并根据不同的产品或服务在下个月月初或客户的账单日恢复。未使用的流量不结转到下个月的流量。
            </li>
            <li class="pb-2"> {{$title}} 提供特定的服务给 {{$title}} 的客户，这是指整个任何给定的计费周期或流量包来定义正常，公平，合理的使用。{{$title}}
              期望用户按照描述来使用每一项服务。{{$title}} 在 {{$title}} 的判断某一个客户不合理使用服务，{{$title}} 可能会采取行动，以减轻负面影响。不公平的使用包括但不限于以下内容：
              <ul>
                <li>a. 转借、泄露、二次销售 {{$title}} 账户或服务。</li>
                <li>b. 不间断使用各类型 p2p、BT、PT 下载服务。</li>
                <li>c. 超过服务规定的套餐使用人数。</li>
                <li>d. 长时间在单一资源提供点上运行消耗大量资源的程序。</li>
                <li>e. 在资源提供点上进行违反资源点所在国家或地区相关法律法规的行为</li>
              </ul>
            </li>
          </ol>
        </div>
        <div
          id="guarantee"
          class="mb-7"
        >
          <h4>4. 保障</h4>
          <ol>
            <li class="pb-2">客户同意维护，保障，并维护 {{$title}} 及其关联公司，免受任何及所有债权债务，包括合理的律师和专家费用，涉及到：
              <ul>
                <li>a. 违反客户在本协议项下约定而产生的；</li>
                <li>b. 客户使用 {{$title}} 服务而产生的；</li>
                <li>c. 所有的行为，并由您的用户名和密码发生的活动而产生的；</li>
                <li>d. 任何物品或服务的出售、与客户相关的内容或客户的信息和数据的广告；</li>
                <li>e. 包含客户的内容或客户的信息和数据中的任何诽谤，中伤或非法的材料；</li>
                <li>f. 任何索赔或论点，即客户的内容或客户的信息和数据侵犯任何第三方的专利，版权或其他知识产权或违反隐私或公开任何第三方的权利产生的；</li>
                <li>g. 任何第三方的访问或使用客户的内容或客户的信息和数据产生的；</li>
                <li>h. 违反任何适用的可接受使用政策产生的。</li>
              </ul>
            </li>
            <li class="pb-2">您保证并声明：
              <ul>
                <li>您的内容与标题符合中国法律规定；</li>
                <li>在您的内容中描述所有客户在 18 岁以上；</li>
                <li>您的内容不包含构成儿童色情，淫秽，兽交，暴力的真实描述，或在中国不合法的任何图像。</li>
              </ul>
            </li>
            <li class="pb-2">
              {{$title}} 可能会提供不属于服务（“第三方服务或软件”）的一部分，第三方产品，服务和/或软件提供给您。{{$title}}
              无法控制第三方服务或软件的内容。任何第三方服务或软件的使用，客户将独自承担风险并受客户与第三方达成的单独协议的条款和条件的限制。
            </li>
          </ol>
        </div>

        <div id="stickyBlockEndPoint"></div>
        <p class="fst-italic">除非另有说明，本页面的内容是根据知识共享署名 3.0 许可协议授权的，代码示例按照 Apache 2.0 许可协议授权。</p>
      </div>

    </div>

  </div>

</main>

@include('footer')