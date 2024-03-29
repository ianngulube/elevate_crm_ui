<?php
namespace App\Utilities;
use \stdClass;
use App\Models\Sms;
use App\Models\Member;
use App\Models\Contribution;
use Illuminate\Support\Facades\Auth;
use App\Models\MemberTask;
use App\Models\Note;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Facades\DB;



class Lists
{
    public function __construct()
    {
        return "construct function was initialized.";
    }

    public static function banks()
    {
        $banks = [
            "Absa Bank Ltd",
            "African Bank Ltd",
            "Bidvest Bank Limited",
            "Capitec Bank Ltd",
            "FirstRand Bank Ltd",
            "Investec Bank Ltd",
            "Nedbank Group Limited",
            "Rand Merchant Bank",
            "RMB Private Bank ",
            "Bank of Athens Limited",
            "Sasfin Bank Ltd",
            "Standard Bank of SA Ltd",
            "Wesbank",
            "GBS Mutual Bank",
            "VBS Mutual Bank",
        ];

        return $banks;
    }

    public static function accountTypes()
    {
        $accountTypes = ["Cheque", "Savings", "Transmission", "Other"];
        return $accountTypes;
    }

    public static function paymentFrequencies()
    {
        $frequencies = ["Monthly", "2 Monthly", "3 Monthly", "Other"];

        return $frequencies;
    }

    public static function languages()
    {
        $languages = [
            "Afrikaans",
            "English",
            "Sepedi",
            "Sesotho",
            "Southern Ndebele",
            "Swazi",
            "Tsonga",
            "Tswana",
            "Venda",
            "Xhosa",
            "Zulu",
        ];
        return $languages;
    }

    public static function statuses()
    {
        $statuses = ["Active", "Deactivated", "Suspended", "Pending"];

        return $statuses;
    }
    public static function titles()
    {
        $titles = ["Mr.", "Mrs."];
        return $titles;
    }

    public static function categories()
    {
        $categories = [
            "Education",
            "Livelihood",
            "Health ",
            "National Emergency Management",
        ];
        return $categories;
    }

    public static function debitOrderDays()
    {
        $days = [
            "1st",
            "2nd",
            "3rd",
            "4th",
            "5th",
            "6th",
            "7th",
            "8th",
            "9th",
            "10th",
            "11th",
            "12th",
            "13th",
            "14th",
            "15th",
            "16th",
            "17th",
            "18th",
            "19th",
            "20th",
            "21th",
            "22nd",
            "23rd",
            "24th",
            "25th",
            "26th",
            "27th",
            "28th",
            "29th",
            "30th",
            "31st",
        ];
        return $days;
    }

    public static function taskStatuses()
    {
        $statuses = ["New", "In-Progress", "Complete"];

        return $statuses;
    }

    public static function taskPriorities()
    {
        $list = ["Call Centre Inbound","Call Centre Outbound", "Walkin", "Online Website", "USSD", "Online App"];

        return $list;
    }

    public static function taskTypes()
    {
        $list = [
            "Personal Detail Updates",
            "Missing Contributions",
            "Claim Follow-Up",
            "Missing Documents",
            'Member Statement',
            "Loan Application",
        ];

        return $list;
    }

    public static function sendSMS($msisdn, $textMessage, $member_id, $user_id)
    {
        $credentials =
            "shelone8@gmail.com:4f7ef913-cd46-4e5f-b392-ed4461658b3f";

        $url = "https://www.zoomconnect.com/app/api/rest/v1/sms/send.json";

        $data = new stdClass();
        $data->message = $textMessage;
        $data->recipientNumber = $msisdn;

        $data_string = json_encode($data);

        $result = file_get_contents(
            $url,
            null,
            stream_context_create([
                "http" => [
                    "method" => "POST",
                    "header" =>
                        "Content-type: application/json\r\n" .
                        "Connection: close\r\n" .
                        "Content-length: " .
                        strlen($data_string) .
                        "\r\n" .
                        "Authorization: Basic " .
                        base64_encode($credentials) .
                        "\r\n",
                    "content" => $data_string,
                ],
            ])
        );

        if (json_decode($result)->messageId) {
            $sms = new Sms();
            $sms->textMessage = $textMessage;
            $sms->msisdn = $msisdn;
            $sms->member_id = $member_id;
            $sms->user_id = $user_id;
            $sms->message_id = json_decode($result)->messageId;
            $sms->error = json_decode($result)->error;
            $sms->save();

            return $sms->message_id;
        } else {
            return "404";
        }
    }

    public  function  sendSMSOnPending(Member $member)
    {
       $textMessage  = "Dear ".$member->firstname." ".$member->surname.":),\nThank you for choosing to be part of Blackpac Association as (".$member->member_type.") category.\nWe are having a quick review of your application will be in touch ASAP. \nRegards. \nBlackpac Online.";
       $result =  $this->sendSMSToMemberOnStatusChange($member,$textMessage);
       return $result;
    }

    public   function  sendSMSOnActive(Member $member)
    {
        $textMessage  = "Dear ".$member->firstname." ".$member->surname." :),\nWelcome to Blackpac Association, your membership no is  (".$member->membership_number.").\nGo to www.Blackpac.co.za to manage your account.\nRegards. \nBlackpac Online.";

       $result =  $this->sendSMSToMemberOnStatusChange($member,$textMessage);
       return $result;
    }

    public   function  sendSMSOnDeActivated(Member $member)
    {
        $textMessage  = "Dear ".$member->firstname." ".$member->surname." :),\nYour Blackpac Association membership no. (".$member->membership_number.") has  been Deactivated.\n, please contact us on 011 567 8989 to activate your membership.\nRegards. \nBlackpac Online.";

       $result =  $this->sendSMSToMemberOnStatusChange($member,$textMessage);
       return $result;
    }
    public   function  sendSMSOnSuspended(Member $member)
    {
        $textMessage  = "Dear ".$member->firstname." ".$member->surname." :),\nYour Blackpac Association membership no. (".$member->membership_number.") has  been Suspended.\n, please contact us on 011 567 8989 to activate your membership.\nRegards. \nBlackpac Online.";

       $result =  $this->sendSMSToMemberOnStatusChange($member,$textMessage);
       return $result;
    }


    public  function  sendSMSOnContributionEntry(Member $member,Contribution $contribution)
    {
        $textMessage  = "Dear ".$member->firstname." ".$member->surname.":),\nYour membership contribution of R".$contribution->amount." .00 has been allocated.\n.Go to www.Blackpaconline.co.za to manage your account or contact us on 011 567 8989.\nRegards. \nBlackpac Online.";
       $result =  $this->sendSMSToMemberOnStatusChange($member,$textMessage);
       return $result;
    }

    public   function  sendSMSOnCaseCreation(Member $member,MemberTask $memberTask)
    {
       $textMessage  = "Dear ".$member->firstname." ".$member->surname.":),\nA new case Ref No.".$memberTask->id." has been opened.\n.We are urgently working on it and we will be in touch ASAP.  Go to www.Blackpaconline.co.za to track the status or contact us on 011 567 .\nRegards. \nBlackpac Online.";
       $result =  $this->sendSMSToMemberOnStatusChange($member,$textMessage);
       return $result;
    }

    public   function  sendSMSOnNoteCreation(Member $member,Note $note)
    {
       $textMessage  = "Dear ".$member->firstname." ".$member->surname.":),\nA new case Ref No.".$note->id." has been opened.\n.We are urgently working on it and we will be in touch ASAP.  Go to www.Blackpaconline.co.za to track the status or contact us on 011 567 .\nRegards. \nBlackpac Online.";
       $result =  $this->sendSMSToMemberOnStatusChange($member,$textMessage);
       return $result;
    }

    public   function  sendSMSOnAnytime(Member $member,$textMessage)
    {

       $result =  $this->sendSMSToMemberAnytime($member,$textMessage);
       return $result;
    }


    private static function sendSMSToMemberOnStatusChange(Member $member, $textMessage)
    {
        $credentials =
            "fndlovu48@gmail.com:22207808-32b9-464f-8197-f06a83ce3d46";

        $url = "https://www.zoomconnect.com/app/api/rest/v1/sms/send.json";

        $data = new stdClass();
        $data->message = $textMessage;
        $data->recipientNumber = $member->cellphone_number;

        $data_string = json_encode($data);

        $result = file_get_contents(
            $url,
            null,
            stream_context_create([
                "http" => [
                    "method" => "POST",
                    "header" =>
                        "Content-type: application/json\r\n" .
                        "Connection: close\r\n" .
                        "Content-length: " .
                        strlen($data_string) .
                        "\r\n" .
                        "Authorization: Basic " .
                        base64_encode($credentials) .
                        "\r\n",
                    "content" => $data_string,
                ],
            ])
        );

        if (json_decode($result)->messageId) {
            $sms = new Sms();
            $sms->textMessage = $textMessage;
            $sms->msisdn =$member->cellphone_number;
            $sms->member_id = $member->id;
            $sms->user_id = Auth::user()->id;
            $sms->message_id = json_decode($result)->messageId;
            $sms->error = json_decode($result)->error;
            $sms->save();

            return $sms->message_id;
        } else {
            return "404";
        }
    }

    private static function sendSMSToMemberAnytime(Member $member, $textMessage)
    {
        $credentials =
            "fndlovu48@gmail.com:22207808-32b9-464f-8197-f06a83ce3d46";

        $url = "https://www.zoomconnect.com/app/api/rest/v1/sms/send.json";

        $data = new stdClass();
        $data->message = $textMessage;
        $data->recipientNumber = $member->cellphone_number;

        $data_string = json_encode($data);

        $result = file_get_contents(
            $url,
            null,
            stream_context_create([
                "http" => [
                    "method" => "POST",
                    "header" =>
                        "Content-type: application/json\r\n" .
                        "Connection: close\r\n" .
                        "Content-length: " .
                        strlen($data_string) .
                        "\r\n" .
                        "Authorization: Basic " .
                        base64_encode($credentials) .
                        "\r\n",
                    "content" => $data_string,
                ],
            ])
        );

        if (json_decode($result)->messageId) {
            $sms = new Sms();
            $sms->textMessage = $textMessage;
            $sms->msisdn =$member->cellphone_number;
            $sms->member_id = $member->id;
            $sms->user_id = Auth::user()->id;
            $sms->message_id = json_decode($result)->messageId;
            $sms->error = json_decode($result)->error;
            $sms->save();

            return $sms->message_id;
        } else {
            return "404";
        }
    }

    // sms api
    public  function fetchSMSCamignsFromZoom(){
        $response = Http::get('https://www.zoomconnect.com:443/app/api/rest/v1/messages/all?pageSize=5000&campaign=&email=fndlovu48%40gmail.com&token=22207808-32b9-464f-8197-f06a83ce3d46&toNumber=&fromDateTimeSent=');
        return $response;
    }

    //  queries for dashboard  start
    public  function  totalMembers(){

        $result =   Member::all()->count();
        return $result;
    }

    public  function  totalMemberss($tenant_id){

        $result =   Member::all()->where('tenant_id','=', $tenant_id)->count();
        return $result;
    }

    public  function  totalContributions(){

        $result =   Contribution::all()->sum('amount');
        return $result;
    }

    public function totalContributionsByTenant($tenant_id){

    $result =  DB::table('contributions as cr')
        ->join('members as mb', 'cr.member_id', '=', 'mb.id')
        ->where('mb.tenant_id', $tenant_id)
        ->sum('amount');

        return $result;
    }

    public function documentsByTenantAndDocumentId($tenant_id) {
        $count = DB::table('documents as doc')
        ->join('members as mb', 'doc.member_id', '=', 'mb.id')
        ->where('mb.tenant_id', $tenant_id)
        ->count();

    return $count;
    }

    public function TasksByMemberTenant($tenant_id) {
        $count = DB::table('member_tasks as t')
            ->join('members as mb', 't.member_id', '=', 'mb.id')
            ->where('mb.tenant_id', $tenant_id)
            ->count();
    
        return $count;
    }
    





    public  function totalActiveMembers(){

        $result =   Member::all()->where('status', 'Active')->count();
        return $result;
    }

    public  function totalActiveMembersByTenant($tenant_id){

        $result =   Member::all()
        ->where('status', 'Active')
        ->where('tenant_id','=', $tenant_id)
        ->count();
        return $result;
    }

    public  function totalNotes(){

        $result =   Note::all()->count();
        return $result;
    }

    public  function totalMemberTasks(){

        $result =   MemberTask::all()->count();
        return $result;
    }

        //  queries for dashboard  end

    //  queries for member tasks start
    public  function totalMemberTasksNew(){
        $result  =  MemberTask::all()->where('status', 'New')->count();
        return $result;
    }

    public  function totalMemberTasksInProgress(){

        $result  =  MemberTask::all()->where('status', 'In-Progress')->count();
        return $result;
    }

    public  function totalMemberTasksClosed(){

        $result  =  MemberTask::all()->where('status', 'Complete')->count();
        return $result;
    }


    //  queries for member tasks end

     //  queries for member  start
     public  function totalMembersActive(){
        $result  =  Member::all()->where('status', 'Active',)->count();
        return $result;
    }

    public  function totalMembersPendingByTenant($tenant_id){

        $result =   Member::all()
        ->where('status', 'Pending')
        ->where('tenant_id','=', $tenant_id)
        ->count();
        return $result;
    }

    public  function totalMembersDeactivatedByTenant($tenant_id){

        $result =   Member::all()
        ->where('status', 'Deactivated')
        ->where('tenant_id','=', $tenant_id)
        ->count();
        return $result;
    }

    public  function totalMembersSuspendedByTenant($tenant_id){

        $result =   Member::all()
        ->where('status', 'Suspended')
        ->where('tenant_id','=', $tenant_id)
        ->count();
        return $result;
    }

    public function totalLatePayment() {
        $result = Contribution::where('type', 'Penalty - Late Payment')->sum('amount');
        return $result;
    }

    public function totalLateContributionsByTenant($tenant_id){

        $result =  DB::table('contributions as cr')
            ->join('members as mb', 'cr.member_id', '=', 'mb.id')
            ->where('mb.tenant_id', $tenant_id)
            ->where('type', 'Penalty - Late Payment')
            ->sum('amount');
    
            return $result;
        }

    public function totalRegistrationFeeByTenant($tenant_id){

        $result =  DB::table('contributions as cr')
            ->join('members as mb', 'cr.member_id', '=', 'mb.id')
            ->where('mb.tenant_id', $tenant_id)
            ->where('type', 'Registration Fee')
            ->sum('amount');
        
            return $result;
        }

    public function totalAdministrationFeeByTenant($tenant_id){

        $result =  DB::table('contributions as cr')
            ->join('members as mb', 'cr.member_id', '=', 'mb.id')
            ->where('mb.tenant_id', $tenant_id)
            ->where('type', 'Administration Fee')
            ->sum('amount');
            
            return $result;
            }

    public function totalNonePaymentByTenant($tenant_id){

        $result =  DB::table('contributions as cr')
        ->join('members as mb', 'cr.member_id', '=', 'mb.id')
        ->where('mb.tenant_id', $tenant_id)
        ->where('type', 'Penalty - None Payment')
        ->sum('amount');
                    
            return $result;
            }

    public function totalContributionByTenant2($tenant_id){

        $result =  DB::table('contributions as cr')
        ->join('members as mb', 'cr.member_id', '=', 'mb.id')
        ->where('mb.tenant_id', $tenant_id)
        ->where('type', 'Contribution')
        ->sum('amount');
                            
            return $result;
            }

    public function totalContribution() {
        $result = Contribution::where('type', 'Contribution')->sum('amount');    
        return $result;
    }
        
    public function totalNonePayment() {
        $result = Contribution::where('type', 'Penalty - None Payment')->sum('amount');
        return $result;
    }
            
    public function totalRegistrationFee() {
        $result = Contribution::where('type', 'Registration Fee')->sum('amount');        
        return $result;
    }
        
    public function totalAdministrationFee() {
        $result = Contribution::where('type', 'Administration Fee')->sum('amount');
        return $result;}
        


private static  function totalMembersThisYearImpl(){
    $result = DB::select(DB::raw("SELECT MONTH(membership_date) AS monthNumber, MONTHNAME(membership_date) as monthJoined,  count(*) as numberOfMembersInMonth FROM members
    where YEAR(membership_date) = YEAR(NOW())
    GROUP BY   MONTH(membership_date),MONTHNAME(membership_date)
    ORDER BY monthNumber;"));
    return $result;


    
}

private static  function totalContributionsThisYearImpl(){
    $result = DB::select(DB::raw("SELECT MONTH(payment_date) AS monthNumber, MONTHNAME(payment_date) as contributionMonth,  sum(amount) as totalContributionsInMonth FROM contributions
    where YEAR(payment_date) = YEAR(NOW())
    GROUP BY   MONTH(payment_date),MONTHNAME(payment_date)
    ORDER BY monthNumber;"));
    return $result;
}

public  function getMembersByMonthThisYear(){

    $totalMembersThisYear = $this->totalMembersThisYearImpl();
    $mo = [];
    $no = [];
    $memberStats  = new stdClass();
    foreach( $totalMembersThisYear as $i => $i_value) {
        $mo[$i] =  $i_value->monthJoined;
        $no[$i] =  $i_value->numberOfMembersInMonth;
    }
    $memberStats->Mo = $mo;
    $memberStats->No = $no;

    return $memberStats;

}

public  function totalContributionsThisYear(){

    $totalMembersThisYear = $this->totalContributionsThisYearImpl();
    $mo = [];
    $no = [];
    $contributionStats  = new stdClass();
    foreach( $totalMembersThisYear as $i => $i_value) {
        $mo[$i] =  $i_value->contributionMonth;
        $no[$i] =  $i_value->totalContributionsInMonth;
    }
    $contributionStats->Mo = $mo;
    $contributionStats->No = $no;

    return $contributionStats;

}

public function  sendSMSToLead($msisdn,$textMessage)
{
    $cell =  "27". substr($msisdn, -9);
    $msisdn = $cell;
  
    //$response = Http::get("https://www.zoomconnect.com/app/api/rest/v1/sms/send-url/32736ccf-953e-4405-afe7-ddf95cf210a4?recipientNumber=$msisdn&message=$textMessage");
    $response = Http::get("https://api.clickatell.com/http/sendmsg?user=mashudu11&password=veNdAEix&api_id=3658349&to=$msisdn&text=$textMessage");
    $sms = new Sms();
    $sms->textMessage = $textMessage;
    $sms->msisdn = $msisdn;
    $sms->module ="Leads";
    $sms->provider ="Zoom Connect";
  
   if($response)
   {
    $sms->message_id =$response;  
    $sms->save();
   }

}
 


}
