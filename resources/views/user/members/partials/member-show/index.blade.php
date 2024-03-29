<div class="sbp-preview-code">
    <!-- Code sample-->
    <ul class="nav nav-tabs" id="toastsManualDismissTabs" role="tablist">
  <li class="nav-item">
      <a class="nav-link active me-1" id="btnPersonalInformation" data-bs-toggle="tab" href="#pnlPersonalInformation" role="tab" aria-controls="pnlPersonalInformation" aria-selected="true">
        <i class="feather-x2 text-yellow-50" data-feather="user-check"></i> Personal Information </a>
     </li>
 <li class="nav-item">
      <a class="nav-link" id="btnContactInformation" data-bs-toggle="tab" href="#pnlContactInformation" role="tab" aria-controls="pnlContactInformation" aria-selected="false">
        <i class="feather-x2 text-yellow-50" data-feather="phone-outgoing"></i> Contact Info </a>
  </li>

     <li class="nav-item">
      <a class="nav-link" id="btnProductInformation" data-bs-toggle="tab" href="#pnlProductInformation" role="tab" aria-controls="pnlProductInformation" aria-selected="false">
        <i class="feather-x2 text-yellow-50" data-feather="layers"></i> Product Information </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="btnNextOfKinDetails" data-bs-toggle="tab" href="#pnlNextOfKinDetails" role="tab" aria-controls="pnlNextOfKinDetails" aria-selected="false">
          <i class="feather-x2 text-yellow-50" data-feather="user-plus"></i> Next Of Kin </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="btnBeneficiaries" data-bs-toggle="tab" href="#pnlBeneficiaries" role="tab" aria-controls="pnlBeneficiaries" aria-selected="false">
      <i class="feather-x2 text-yellow-50" data-feather="user-check"></i> Beneficiaries </a>
   </li>
     <li class="nav-item">
      <a class="nav-link" id="btnTransactions" data-bs-toggle="tab" href="#pnlTransactions" role="tab" aria-controls="pnlTransactions" aria-selected="false">
        <i class="feather-x2 text-yellow-50" data-feather="shopping-cart"></i> Transactions </a>
     </li>
     <li class="nav-item">
      <a class="nav-link" id="btnCashflow" data-bs-toggle="tab" href="#pnlCashflow" role="tab" aria-controls="pnlCashflow" aria-selected="false">
          <i class="feather-x2 text-yellow-50" data-feather="trending-up"></i> Cashflow </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="btnBanking" data-bs-toggle="tab" href="#pnlBanking" role="tab" aria-controls="pnlBanking" aria-selected="false">
        <i class="feather-x2 text-yellow-50" data-feather="dollar-sign"></i> Banking </a>
</li>

     <li class="nav-item">
      <a class="nav-link" id="btnDocuments" data-bs-toggle="tab" href="#pnlDocuments" role="tab" aria-controls="pnlDocuments" aria-selected="false">
        <i class="feather-x2 text-yellow-50" data-feather="folder"></i> Documents </a>
     </li>
     <li class="nav-item">
      <a class="nav-link" id="btnTasks" data-bs-toggle="tab" href="#pnlTasks" role="tab" aria-controls="pnlTasks" aria-selected="false">
          <i class="feather-x2 text-yellow-50" data-feather="alert-triangle"></i>Cases </a>
  </li>
     <li class="nav-item">
      <a class="nav-link" id="btnNotes" data-bs-toggle="tab" href="#pnlNotes" role="tab" aria-controls="pnlNotes" aria-selected="false">
        <i class="feather-x2 text-yellow-50" data-feather="file-text"></i> Notes </a>
     </li>

     <li class="nav-item">
      <a class="nav-link" id="btnCommunication" data-bs-toggle="tab" href="#pnlCommunication" role="tab" aria-controls="pnlCommunication" aria-selected="false">
        <i class="feather-x2 text-yellow-50" data-feather="mic"></i> Communication </a>
     </li>
    </ul>
    <hr>
    <!-- Tab panes-->
    <div class="tab-content">
     <div class="tab-pane active" id="pnlPersonalInformation" role="tabpanel" aria-labelledby="btnPersonalInformation"> @include('user.members.partials.member-show.personal-information') </div>
     <div class="tab-pane" id="pnlContactInformation" role="tabpanel" aria-labelledby="btnContactInformation"> @include('user.members.partials.member-show.contact-information') </div>
     <div class="tab-pane" id="pnlProductInformation" role="tabpanel" aria-labelledby="btnProductInformation"> @include('user.members.partials.member-show.product-information') </div>
     <div class="tab-pane" id="pnlTransactions" role="tabpanel" aria-labelledby="btnTransactions"> @include('user.members.partials.member-show.transactions') </div>
     <div class="tab-pane" id="pnlBeneficiaries" role="tabpanel" aria-labelledby="btnBeneficiaries"> @include('user.members.partials.member-show.beneficiaries') </div>
     <div class="tab-pane" id="pnlCommunication" role="tabpanel" aria-labelledby="btnCommunication"> @include('user.members.partials.member-show.communication') </div>
     <div class="tab-pane" id="pnlDocuments" role="tabpanel" aria-labelledby="btnDocuments"> @include('user.members.partials.member-show.documents') </div>
     <div class="tab-pane" id="pnlNotes" role="tabpanel" aria-labelledby="btnNotes"> @include('user.members.partials.member-show.notes') </div>
     <div class="tab-pane" id="pnlCashflow" role="tabpanel" aria-labelledby="btnCashflow"> @include('user.members.partials.member-show.cashflow') </div>
     <div class="tab-pane" id="pnlBanking" role="tabpanel" aria-labelledby="btnBanking"> @include('user.members.partials.member-show.banking') </div>
     <div class="tab-pane" id="pnlNextOfKinDetails" role="tabpanel" aria-labelledby="btnNextOfKinDetails"> @include('user.members.partials.member-show.next-of-kin') </div>
     <div class="tab-pane" id="pnlTasks" role="tabpanel" aria-labelledby="btnTasks"> @include('user.members.partials.member-show.tasks') </div>
    </div>
   </div>
