<?php 

ob_start();
/*
به نام خدا
@social_programming
@amir_social
_________________
version:2.5
*/

$API_KEY = '401341009:AAG3CiSGnfkuRovNAikeTEqXMOp_FAmEQ8U';
##------------------------------##
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
 function sendmessage($chat_id, $text, $model){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
	function sendaction($chat_id, $action){
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
	function Forward($KojaShe,$AzKoja,$KodomMSG){
    bot('ForwardMessage',[
        'chat_id'=>$KojaShe,
        'from_chat_id'=>$AzKoja,
        'message_id'=>$KodomMSG
    ]);
	}
    function save($filename,$TXTdata){
	$myfile = fopen($filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
	
//====================special======================//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->id;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$text = $message->text;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$username = $update->message->from->username;
$bcpv = file_get_contents("bcpv.txt");
$bcgap = file_get_contents("bcgap.txt");
$name = $update->message->from->first_name;
$gpname = $update->message->chat->title;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$rtid = $update->message->reply_to_message->from->id;

@$locklink = file_get_contents("data/$chat_id/locklink.txt");
@$locktag = file_get_contents("data/$chat_id/locktag.txt");
@$lockphoto = file_get_contents("data/$chat_id/lockphoto.txt");
@$lockforward = file_get_contents("data/$chat_id/lockforward.txt");
@$lockvideo = file_get_contents("data/$chat_id/lockvideo.txt");
@$locklocation = file_get_contents("data/$chat_id/locklocation.txt");
@$locksticker = file_get_contents("data/$chat_id/locksticker.txt");
@$lockdocument = file_get_contents("data/$chat_id/lockdocument.txt");
@$lockcontact = file_get_contents("data/$chat_id/lockcontact.txt");
@$lockgame = file_get_contents("data/$chat_id/lockgame.txt");
@$lockmusic = file_get_contents("data/$chat_id/lockmusic.txt");
@$lockgif = file_get_contents("data/$chat_id/lockgif.txt");
@$lockvoice = file_get_contents("data/$chat_id/lockvoice.txt");
@$lockbot = file_get_contents("data/$chat_id/lockbot.txt");
@$fosh= file_get_contents("data/$chat_id/lockfosh.txt");
@$opera= file_get_contents("data/$chat_id/lockopera.txt");
@$locktext = file_get_contents("data/$chat_id/locktext.txt");
@$lockall = file_get_contents("data/$chat_id/lockall.txt");
@$wel = file_get_contents("data/$chat_id/wel.txt");
@$add = file_get_contents("data/$chat_id/add.txt");

@$setlink = file_get_contents("data/$chat_id/setlink.txt");
@$settag = file_get_contents("data/$chat_id/settag.txt");
@$setedite = file_get_contents("data/$chat_id/setedite.txt");
@$setphoto = file_get_contents("data/$chat_id/setphoto.txt");
@$setforward = file_get_contents("data/$chat_id/setforward.txt");
@$setvideo = file_get_contents("data/$chat_id/setvideo.txt");
@$setlocation = file_get_contents("data/$chat_id/setlocation.txt");
@$setsticker = file_get_contents("data/$chat_id/setsticker.txt");
@$setdocument = file_get_contents("data/$chat_id/setdocument.txt");
@$setcontact = file_get_contents("data/$chat_id/setcontact.txt");
@$setgame = file_get_contents("data/$chat_id/setgame.txt");
@$setmusic = file_get_contents("data/$chat_id/setmusic.txt");
@$setgif = file_get_contents("data/$chat_id/setgif.txt");
@$setvoice = file_get_contents("data/$chat_id/setvoice.txt");
@$settext = file_get_contents("data/$chat_id/settext.txt");
@$sakht = file_get_contents("data/$chat_id/setsakht.txt");
@$mt = file_get_contents("data/$chat_id/mt.txt");

$data = $update->callback_query->data;
$photo = $update->message->photo;
$forward = $update->message->forward_from;
$video = $update->message->video;
$location = $update->message->location;
$sticker = $update->message->sticker;
$document = $update->message->document;
$contact = $update->message->contact;
$game = $update->message->game;
$music = $update->message->audio;
$gif = $update->message->gif;
$voice = $update->message->voice;
$edit = $update->edited_message;
$joinusername = $update->message->new_chat_member->from->username;
$joinmember = $update->message->new_chat_member;
$leftmember = $update->message->left_chat_member;
$newchatmemberu = $update->message->new_chat_member->username;
$messageid = $update->callback_query->message->message_id;
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=@glogah_org&user_id=".$from_id)); 
$tch = $forchaneel->result->status;
$type = $update->message->chat->type;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$rank = $info['result']['status'];
$reply = $update->message->reply_to_message->message_id;
$time = file_get_contents("https://provps.ir/td?td=time");
$date = file_get_contents("https://provps.ir/td?td=date");

$zekr = file_get_contents("https://ادرس/api/zekr.php");
$hadis = file_get_contents("https://ادرس/api/hadis.php");
$danestani  = file_get_contents("https://ادرس/api/danestani.php");

$ADMIN = 213753548; 
//====================special=================//
if($type == 'private')
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
  SendMessage($chat_id,"سلام🌹
🔸جهت حمایت و استفاده از ربات ما و همچنین اطلاع از بروز رسانی ها در کانال زیر عضو شوید و سپس گزینه 
/start
را بزنید.↖️
ایدی کانال ما:
🆔 : @glogah_org");
  }
elseif($text == '/start' && $type == "private"){
$user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('Member.txt',$add_user);
    }	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>" سلام خوش امدید.",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفیه ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}  	

if($data == 'more'){ 
	bot('editmessagetext',[
       'chat_id'=>$chatid,
       'message_id'=>$messageid,
        'text'=>"سلام خوش امدید در حال طراحی ربات هستیم",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"😂مدیریت😂",'url'=>"http://telegram.me/ab5480"]],
			  [['text'=>"📫پیام رسان ساز📫",'url'=>"http://telegram.me/"]],
			  [['text'=>"📡تبچی ساز📡",'url'=>"http://telegram.me/"]],
			  [['text'=>"📞جهت ارتباط با ما📞",'url'=>"http://telegram.me/"]],
			  [['text'=>"🌹کانال تیممون🌹",'url'=>"http://telegram.me/"]],
              ],'resize_keyboard'=>true
        ])


            ]);
}
//=====special========//
if($text == '/add' && $type == "group"){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"لطفا گروه را به سوپر گروه تبدیل کنید",
  ]);
}  
//============
if($text == '/add' && $from_id == $ADMIN && $type == "supergroup"  ){    
  $userr = file_get_contents('gaps.txt');
  $memberrs = explode("\n",$userr);
  if (!in_array($chat_id,$memberrs)){
  $add_userr = file_get_contents('gaps.txt');
  $add_userr .= $chat_id."\n";
  file_put_contents('gaps.txt',$add_userr);
}    
  mkdir("data/$chat_id");   
  save("data/$chat_id/locklink.txt","✖️");    
  save("data/$chat_id/locktag.txt","✖️"); 
  save("data/$chat_id/lockphoto.txt","✖️");
  save("data/$chat_id/lockforward.txt","✖️");
  save("data/$chat_id/lockvideo.txt","✖️");
  save("data/$chat_id/locklocation.txt","✖️");
  save("data/$chat_id/locksticker.txt","✖️");
  save("data/$chat_id/lockdocument.txt","✖️");
  save("data/$chat_id/lockcontact.txt","✖️");
  save("data/$chat_id/lockgame.txt","✖️");
  save("data/$chat_id/lockmusic.txt","✖️");
  save("data/$chat_id/lockgif.txt","✖️");
  save("data/$chat_id/lockvoice.txt","✖️");
  save("data/$chat_id/lockbot.txt","✖️");
  save("data/$chat_id/lockedite.txt","✖️");
  save("data/$chat_id/locktext.txt","✖️"); 
  save("data/$chat_id/lockall.txt","✖️");
  save("data/$chat_id/wel.txt","✖️");   
  save("data/$chat_id/setlink.txt","del");
  save("data/$chat_id/settag.txt","del");
  save("data/$chat_id/setforward.txt","del");  
  save("data/$chat_id/setvideo.txt","del");
  save("data/$chat_id/setphoto.txt","del");
  save("data/$chat_id/setlocation.txt","del");
  save("data/$chat_id/setsticker.txt","del");
  save("data/$chat_id/setdocument.txt","del");
  save("data/$chat_id/setcontact.txt","del");
  save("data/$chat_id/setgame.txt","del"); 
  save("data/$chat_id/setmusic.txt","del");
  save("data/$chat_id/setgif.txt","del");
  save("data/$chat_id/setvoice.txt","del");
  save("data/$chat_id/settext.txt","del");
  save("data/$chat_id/setsakht.txt","off");   
  save("data/$chat_id/add.txt","✔️");		
  sendaction($chat_id,'typing');
  $sss = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/sendmessage?chat_id=$chat_id&text=0&parse_mode=html"));
$shetmsg = $sss->result->message_id;
$hh = $shetmsg;
 bot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'10%◼️◻️◻️◻️◻️◻️◻️◻️◻️◻️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'20%◼️◼️◻️◻️◻️◻️◻️◻️◻️◻️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'30%◼️◼️◼️◻️◻️◻️◻️◻️◻️◻️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'40%◼️◼️◼️◼️◻️◻️◻️◻️◻️◻️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'50%◼️◼️◼️◼️◼️◻️◻️◻️◻️◻️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'60%◼️◼️◼️◼️◼️◼️◻️◻️◻️◻️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'70%◼️◼️◼️◼️◼️◼️◼️◻️◻️◻️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'80%◼️◼️◼️◼️◼️◼️◼️◼️◻️◻️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'90%◼️◼️◼️◼️◼️◼️◼️◼️◼️◻️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'100%◼️◼️◼️◼️◼️◼️◼️◼️◼️◼️'
 ]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'#>> Group has been added ✅'
 ]); 
}

if($text == '/add' && $from_id == $ADMIN && $type == "supergroup"  ){    
  bot('sendMessage',[
      'chat_id'=>$ADMIN,
      'text'=>"گروه$gpname 
                
با ایدی $chat_id                
در زمان و تاریخ 
$time
$date
به لیست گروه های ربات پیوست.",
      'parse_mode'=>'html',
    ]);
}  

if($text == '/rem' && $from_id == $ADMIN && $type == "supergroup"  ){
  save("data/$chat_id/add.txt","✖️");    
  sendaction($chat_id,'typing');
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"*#》Gяσυρ нαѕ вєєη яємσνє∂✅*",
      'parse_mode'=>'MarkDown',
    ]);
}  
if($text == '/rem' && $from_id == $ADMIN && $type == "supergroup"  ){    
  bot('sendMessage',[
      'chat_id'=>$ADMIN,
      'text'=>"گروه$gpname 
                
با ایدی $chat_id                
در زمان و تاریخ 
$time
$date
از لیست گروه های ربات خارج شد.",
      'parse_mode'=>'html',
    ]);
}  

if($text == '/help' && $add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
`⚡️To See The CoMmAnDs of YoUr DesiRed iteM SubMiT`

💠*EngliSh CoMmAnDs :*

💥*>>  /sudohelp*
*دستورات سودوی ربات 👆🏻*
`»»»»»»»»»»»»»»»`
💥*>>  /lockhelp*
*دستورات قفلی 👆🏻*
`»»»»»»»»»»»»»»»`
💥*>>  /modhelp*
*دستورات مدیریتی 👆🏻*
`»»»»»»»»»»»»»»»`
💥*>>  /funhelp*
*دستورات فان 👆🏻*
`»»»»»»»»»»»»»»»`
*___________________________*
*🎭channel:* @SOCIAL\_PROGRAMMING
*💳shop:* @lYOU4Ul				
*___________________________*",
    'parse_mode'=>'MarkDown',
    ]);
}  
}

if($text == '/lockhelp' && $add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
💠EngliSh CoMmAnDs :

#Lock commands 

*🔒/Lock* 
`or`
*🔓/Unlock*

`[link , tag , bot , strict ]`
 
 #Mute commands

*🔇/Mute*
`or`
*🔊/unmute*

`[gif , photo , document , sticker , video , text , forward , location , audio , voice , contact ,tgservice , all ]`

*___________________________*
*🎭channel:* @SOCIAL\_PROGRAMMING
*💳shop:* @lYOU4Ul				
*___________________________*",
    'parse_mode'=>'MarkDown',
    ]);
}  
}


if($text == '/sudohelp' && $add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
با دستور 

*مدیریت*
در پیوی ربات ارد پنل مدیریت ربات خواهید شد.

جهت اضافه کردن ربلات به گروه انرا در گروه مورد نظر اضافه کرده و دستور
/add
را بزنید
*___________________________*
*🎭channel:* @SOCIAL\_PROGRAMMING
*💳shop:* @lYOU4Ul				
*___________________________*",
    'parse_mode'=>'MarkDown',
    ]);
}  
}

if($text == '/funhelp' && $add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
دریافت ذکر روز
**/zekr**
دربافت دانستنی
**/danestani**
دریافت حدیث
**/hadis**
دریافت ساعت و تاریخ
**/time**
*___________________________*
*🎭channel:* @SOCIAL\_PROGRAMMING
*💳shop:* @lYOU4Ul				
*___________________________*",
    'parse_mode'=>'MarkDown',
    ]);
}  
}

if($text == '/modhelp' && $add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
`این قسمت به دلیل مهم بودن به استثنا فارسی نوشته شد.
strict
اگر این قفل باشد یعنی حالت سخت گیرانه فعال است و با فرستادن هر پست خلاف قوانین 
فرد ارسال کننده ریمو خواهد شد.`
===============================
قسمت های قفلی نیز داری دو قسمت میباشند یعنی هر قفل میتواند دو نوع کار کنید
به این شکل که اگر شما لینک را قفل کردید 
/lock link
میتوانید  با دستور زیر تنظیم کنید که فرد ادرسال کنندهی لینک پستش پاک شود 
/link del
و با دستور زیر نیز میتوانید تنظیم کنید که هم پست حاوی لینک پاک شود و هم اینکه کاربر ارسال کننده لینک از گروه ریمو شود
/link kick
دستورات کلی به صورت زیر است

`[link , tag , bot , strict , gif , photo , document , sticker , video , text , forward , location , audio , voice , contact ,tgservice , all ]`
*del*
or
*kick*
توجه داشته باشید که میبایسد قفل هر دستور بالا فعال باشد.
==================================
چند دستور دیگر
برای سنجاق 
ریپلی +/pin
حذف سنجاق
/unpin
==
برای کیک کردن کسی
ریپلی +/kick
==
برای ولکام
/welcome on
/welcome off
=======
برای فعال سازی جوین اجباری گروه
/join on
و برای غیر فعال سازی از
/join off
استفاده کنید
===============================
شاید خیلی از پاسخ های انگلیسی مشکل ترجمه داشته باشن 
باید ببخشید چون دیگه جمله هاشو از خودم در اوردم زدم
......

*___________________________*
*🎭channel:* @glogah_org
				
*___________________________*",
    'parse_mode'=>'MarkDown',
    ]);
}  
}
//================================
if($text == '/ping' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator"){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
`social is online`
*__________________*
*🎭channel:* @SOCIAL\_PROGRAMMING
*💳shop:* @lYOU4Ul",
    'parse_mode'=>'MarkDown',
    ]);
  }
}

if($text == '/settings' && $add == "✔️" && $type == "supergroup"){   
if($rank == "creator" or $rank == "administrator"){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
----------------------------------------
⚙️gяσυρ ѕєттιηgѕ:\|/
🔐gяσυρ ℓσcк ℓιѕт
》ℓσcк ѕтяιcт= ($sakht)
》ℓσcк ℓιηкѕ = $locklink($setlink) 
》ℓσcк тαgѕ = $locktag($settag)
》ℓσcк вσт = $lockbot
*====================*
🔇gяσυρ мυтє ℓιѕт 
》мυтє ρнσтσ = $lockphoto($setphoto) 
》мυтє ƒσяωαя∂ = $lockforward($setforward) 
》мυтє νι∂єσ = $lockvideo($setvideo) 
》мυтє ℓσcαтιση = $locklocation($setlocation) 
》мυтє ѕтιcкєя = $locksticker($setsticker) 
》мυтє ∂σcυмєηт = $lockdocument($setdocument) 
》мυтє cσηтαcт = $lockcontact($setcontact) 
》мυтє gαмє = $lockgame($setgame) 
》мυтє ๓บรïς = $lockmusic($setmusic) 
》мυтє gιƒ = $lockgif($setgif) 
》мυтє νσιcє = $lockvoice($setvoice)
》мυтє тєχт = $locktext($settext)
》мυтє αℓℓ = $lockall
》ωєℓcσмє = $wel
======================
join = $mt
----------------------------------------
🎭*channel:* @SOCIAL\_PROGRAMMING \n *💳shop:* @lYOU4Ul
	",
   'parse_mode'=>'MarkDown',
    ]);
  }
}


if($text == "/id" && $add == "✔️"  && $type == "supergroup" ){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🔗ایدی گپ = $chat_id
🖋نام گپ = $gpname 
〰〰〰〰〰〰〰〰〰〰
⚜️نام شما = $name 
🔰ایدی شما =  $from_id
🆔یوزر نیم شما = https://t.me/$username",
    'parse_mode'=>'html'
    ]); 
}

////////////////////link////////////////
if($text == '/lock link'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locklink == "✖️"){    
save("data/$chat_id/locklink.txt","✔️");    
SendMessage($chat_id," ☆》Lιηк_Pσѕтιηg Hαѕ Bєєη Lσcкє∂🔐 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》Lιηк _Pσѕтιηg Iѕ Aℓяєα∂у Lσcкє∂ 🔒 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unlock link' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locklink == "✔️" ){    
save("data/$chat_id/locklink.txt","✖️");  
SendMessage($chat_id,"☆》Lιηк_Pσѕтιηg Hαѕ Bєєη Uηℓσcкє∂ 🔓 \n _________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》Lιηк _Pσѕтιηg Iѕ Nσт Lσcкє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//setlink
if($rank == "creator" or $rank == "administrator" ){   
if($text == "/link del" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setlink.txt","del");    
SendMessage($chat_id,"From now on, posts containing the link will be deleted.
");
}
if($text == "/link kick" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setlink.txt","kick");    
SendMessage($chat_id,"From now on, posts containing the link will be kicked.
");
}
}

//=========endlink===============//

/////===========start tag=============//////
if($text == '/lock tag'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locktag == "✖️"){    
save("data/$chat_id/locktag.txt","✔️");    
SendMessage($chat_id,"☆》Tαg _Pσѕтιηg Hαѕ Bєєη Lσcкє∂ 🔒 \n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id," ☆》tαg _Pσѕтιηg Iѕ Aℓяєα∂у Lσcкє∂ 🔒 \n________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unlock tag' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locktag == "✔️" ){    
save("data/$chat_id/locktag.txt","✖️");  
SendMessage($chat_id,"☆》Tαg _Pσѕтιηg Hαѕ Bєєη Uηℓσcкє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》Tαg _Pσѕтιηg Iѕ Nσт Lσcкє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//settag
if($text == "/tag del" && $add == "✔️"  && $type == "supergroup" ){
if($rank == "creator" or $rank == "administrator" ){      
save("data/$chat_id/settag.txt","del");    
SendMessage($chat_id,"From now on, posts containing the tag will be deleted.
");
}
}

if($text == "/tag kick" && $add == "✔️"  && $type == "supergroup" ){
if($rank == "creator" or $rank == "administrator" ){      
save("data/$chat_id/settag.txt","kick");    
SendMessage($chat_id," From now on, the user posting the link to kick.
");
}
}
//-----------------------end tag---------------//

/////===========start tag=============//////
if($text == '/lock bot'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockbot == "✖️"){    
save("data/$chat_id/lockbot.txt","✔️");    
SendMessage($chat_id,"☆》ℓσcкє∂ bot 🔒 \n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id," ☆》Aℓяєα∂у Lσcкє∂ bot 🔒 \n________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unlock bot' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockbot == "✔️" ){    
save("data/$chat_id/lockbot.txt","✖️");  
SendMessage($chat_id,"☆》Uηℓσcкє∂ bot 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》Nσт Lσcкє∂ bot 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//--------------------end bot---------------//

////////////////////photo////////////////
if($text == '/mute photo'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockphoto == "✖️"){    
save("data/$chat_id/lockphoto.txt","✔️");    
SendMessage($chat_id," ☆》photo_Pσѕтιηg Hαѕ Bєєη muteє∂🔐 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》photo _Pσѕтιηg Iѕ Aℓяєα∂у muteє∂ 🔒 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unmute photo' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockphoto == "✔️" ){    
save("data/$chat_id/lockphoto.txt","✖️");  
SendMessage($chat_id,"☆》photo_Pσѕтιηg Hαѕ Bєєη Uηmuteє∂ 🔓 \n _________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》photo _Pσѕтιηg Iѕ Nσт muteє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//setphoto
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/photo del" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setphoto.txt","del");    
SendMessage($chat_id,"From now on, posts containing the photo will be deleted.
");
}
if($text == "/photo kick" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setphoto.txt","kick");    
SendMessage($chat_id," From now on, the user posting the photo to kick.
");
}
}
//=========endphoto===============//

////////////////////forward////////////////
if($text == '/mute forward'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockforward == "✖️"){    
save("data/$chat_id/lockforward.txt","✔️");    
SendMessage($chat_id," ☆》forward_Pσѕтιηg Hαѕ Bєєη muteє∂🔐 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》forward _Pσѕтιηg Iѕ Aℓяєα∂у muteє∂ 🔒 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unmute forward' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockforward == "✔️" ){    
save("data/$chat_id/lockforward.txt","✖️");  
SendMessage($chat_id,"☆》forward_Pσѕтιηg Hαѕ Bєєη Uηmuteє∂ 🔓 \n _________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》forward _Pσѕтιηg Iѕ Nσт muteє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//setforward
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/forward del" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setforward.txt","del");    
SendMessage($chat_id,"From now on, posts containing the forward will be deleted.
");
}
if($text == "/forward kick" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setforward.txt","kick");    
SendMessage($chat_id," From now on, the user posting the forward to kick.
");
}
}
//=========endforward===============//

////////////////////video////////////////
if($text == '/mute video'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockvideo == "✖️"){    
save("data/$chat_id/lockvideo.txt","✔️");    
SendMessage($chat_id," ☆》video_Pσѕтιηg Hαѕ Bєєη muteє∂🔐 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》video _Pσѕтιηg Iѕ Aℓяєα∂у muteє∂ 🔒 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unmute video' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockvideo == "✔️" ){    
save("data/$chat_id/lockvideo.txt","✖️");  
SendMessage($chat_id,"☆》video_Pσѕтιηg Hαѕ Bєєη Uηmuteє∂ 🔓 \n _________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》video _Pσѕтιηg Iѕ Nσт muteє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//setvideo
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/video del" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setvideo.txt","del");    
SendMessage($chat_id,"From now on, posts containing the video will be deleted.
");
}
if($text == "/video kick" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setvideo.txt","kick");    
SendMessage($chat_id," From now on, the user posting the video to kick.
");
}
}
//=========endvideo===============//

////////////////////location////////////////
if($text == '/mute location'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locklocation == "✖️"){    
save("data/$chat_id/locklocation.txt","✔️");    
SendMessage($chat_id," ☆》location_Pσѕтιηg Hαѕ Bєєη muteє∂🔐 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》location _Pσѕтιηg Iѕ Aℓяєα∂у muteє∂ 🔒 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unmute location' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locklocation == "✔️" ){    
save("data/$chat_id/locklocation.txt","✖️");  
SendMessage($chat_id,"☆》location_Pσѕтιηg Hαѕ Bєєη Uηmuteє∂ 🔓 \n _________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》location _Pσѕтιηg Iѕ Nσт muteє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//setlocation
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/location del" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setlocation.txt","del");    
SendMessage($chat_id,"From now on, posts containing the location will be deleted.
");
}
if($text == "/location kick" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setlocation.txt","kick");    
SendMessage($chat_id," From now on, the user posting the location to kick.
");
}
}
//=========endlocation===============//

////////////////////sticker////////////////
if($text == '/mute sticker'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locksticker == "✖️"){    
save("data/$chat_id/locksticker.txt","✔️");    
SendMessage($chat_id," ☆》sticker_Pσѕтιηg Hαѕ Bєєη muteє∂🔐 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》sticker _Pσѕтιηg Iѕ Aℓяєα∂у muteє∂ 🔒 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unmute sticker' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locksticker == "✔️" ){    
save("data/$chat_id/locksticker.txt","✖️");  
SendMessage($chat_id,"☆》sticker_Pσѕтιηg Hαѕ Bєєη Uηmuteє∂ 🔓 \n _________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》sticker _Pσѕтιηg Iѕ Nσт muteє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//setsticker
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/sticker del" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setsticker.txt","del");    
SendMessage($chat_id,"From now on, posts containing the sticker will be deleted.
");
}
if($text == "/sticker kick" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setsticker.txt","kick");    
SendMessage($chat_id," From now on, the user posting the sticker to kick.
");
}
}
//=========endsticker===============//

////////////////////document////////////////
if($text == '/mute document'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockdocument == "✖️"){    
save("data/$chat_id/lockdocument.txt","✔️");    
SendMessage($chat_id," ☆》document_Pσѕтιηg Hαѕ Bєєη muteє∂🔐 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》document _Pσѕтιηg Iѕ Aℓяєα∂у muteє∂ 🔒 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unmute document' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockdocument == "✔️" ){    
save("data/$chat_id/lockdocument.txt","✖️");  
SendMessage($chat_id,"☆》document_Pσѕтιηg Hαѕ Bєєη Uηmuteє∂ 🔓 \n _________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》document _Pσѕтιηg Iѕ Nσт muteє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//setdocument
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/document del" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setdocument.txt","del");    
SendMessage($chat_id,"From now on, posts containing the document will be deleted.
");
}
if($text == "/document kick" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setdocument.txt","kick");    
SendMessage($chat_id," From now on, the user posting the document to kick.
");
}
}
//=========enddocument===============//

////////////////////contact////////////////
if($text == '/mute contact'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockcontact == "✖️"){    
save("data/$chat_id/lockcontact.txt","✔️");    
SendMessage($chat_id," ☆》contact_Pσѕтιηg Hαѕ Bєєη muteє∂🔐 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》contact _Pσѕтιηg Iѕ Aℓяєα∂у muteє∂ 🔒 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unmute contact' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockcontact == "✔️" ){    
save("data/$chat_id/lockcontact.txt","✖️");  
SendMessage($chat_id,"☆》contact_Pσѕтιηg Hαѕ Bєєη Uηmuteє∂ 🔓 \n _________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》contact _Pσѕтιηg Iѕ Nσт muteє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//setcontact
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/contact del" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setcontact.txt","del");    
SendMessage($chat_id,"From now on, posts containing the contact will be deleted.
");
}
if($text == "/contact kick" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setcontact.txt","kick");    
SendMessage($chat_id," From now on, the user posting the contact to kick.
");
}
}
//=========endcontact===============//

////////////////////game////////////////
if($text == '/mute game'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockgame == "✖️"){    
save("data/$chat_id/lockgame.txt","✔️");    
SendMessage($chat_id," ☆》game_Pσѕтιηg Hαѕ Bєєη muteє∂🔐 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》game _Pσѕтιηg Iѕ Aℓяєα∂у muteє∂ 🔒 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unmute game' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockgame == "✔️" ){    
save("data/$chat_id/lockgame.txt","✖️");  
SendMessage($chat_id,"☆》game_Pσѕтιηg Hαѕ Bєєη Uηmuteє∂ 🔓 \n _________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》game _Pσѕтιηg Iѕ Nσт muteє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//setgame
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/game del" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setgame.txt","del");    
SendMessage($chat_id,"From now on, posts containing the game will be deleted.
");
}
if($text == "/game kick" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setgame.txt","kick");    
SendMessage($chat_id," From now on, the user posting the game to kick.
");
}
}
//=========endgame===============//

////////////////////music////////////////
if($text == '/mute music'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockmusic == "✖️"){    
save("data/$chat_id/lockmusic.txt","✔️");    
SendMessage($chat_id," ☆》music_Pσѕтιηg Hαѕ Bєєη muteє∂🔐 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》music _Pσѕтιηg Iѕ Aℓяєα∂у muteє∂ 🔒 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unmute music' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockmusic == "✔️" ){    
save("data/$chat_id/lockmusic.txt","✖️");  
SendMessage($chat_id,"☆》music_Pσѕтιηg Hαѕ Bєєη Uηmuteє∂ 🔓 \n _________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》music _Pσѕтιηg Iѕ Nσт muteє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//setmusic
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/music del" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setmusic.txt","del");    
SendMessage($chat_id,"From now on, posts containing the music will be deleted.
");
}
if($text == "/music kick" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setmusic.txt","kick");    
SendMessage($chat_id," From now on, the user posting the music to kick.
");
}
}
//=========endmusic===============//

////////////////////gif////////////////
if($text == '/mute gif'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockgif == "✖️"){    
save("data/$chat_id/lockgif.txt","✔️");    
SendMessage($chat_id," ☆》gif_Pσѕтιηg Hαѕ Bєєη muteє∂🔐 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》gif _Pσѕтιηg Iѕ Aℓяєα∂у muteє∂ 🔒 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unmute gif' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockgif == "✔️" ){    
save("data/$chat_id/lockgif.txt","✖️");  
SendMessage($chat_id,"☆》gif_Pσѕтιηg Hαѕ Bєєη Uηmuteє∂ 🔓 \n _________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》gif _Pσѕтιηg Iѕ Nσт muteє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//setgif
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/gif del" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setgif.txt","del");    
SendMessage($chat_id,"From now on, posts containing the gif will be deleted.
");
}
if($text == "/gif kick" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setgif.txt","kick");    
SendMessage($chat_id," From now on, the user posting the gif to kick.
");
}
}
//=========endgif===============//

////////////////////voice////////////////
if($text == '/mute voice'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockvoice == "✖️"){    
save("data/$chat_id/lockvoice.txt","✔️");    
SendMessage($chat_id," ☆》voice_Pσѕтιηg Hαѕ Bєєη muteє∂🔐 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》voice _Pσѕтιηg Iѕ Aℓяєα∂у muteє∂ 🔒 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unmute voice' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockvoice == "✔️" ){    
save("data/$chat_id/lockvoice.txt","✖️");  
SendMessage($chat_id,"☆》voice_Pσѕтιηg Hαѕ Bєєη Uηmuteє∂ 🔓 \n _________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》voice _Pσѕтιηg Iѕ Nσт muteє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//setvoice
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/voice del" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setvoice.txt","del");    
SendMessage($chat_id,"From now on, posts containing the voice will be deleted.
");
}
if($text == "/voice kick" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setvoice.txt","kick");    
SendMessage($chat_id," From now on, the user posting the voice to kick.
");
}
}
//=========endvoice===============//

////////////////////text////////////////
if($text == '/mute text'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locktext == "✖️"){    
save("data/$chat_id/locktext.txt","✔️");    
SendMessage($chat_id," ☆》text_Pσѕтιηg Hαѕ Bєєη muteє∂🔐 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》text _Pσѕтιηg Iѕ Aℓяєα∂у muteє∂ 🔒 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unmute text' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locktext == "✔️" ){    
save("data/$chat_id/locktext.txt","✖️");  
SendMessage($chat_id,"☆》text_Pσѕтιηg Hαѕ Bєєη Uηmuteє∂ 🔓 \n _________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》text _Pσѕтιηg Iѕ Nσт muteє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//settext
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/text del" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/settext.txt","del");    
SendMessage($chat_id,"From now on, posts containing the text will be deleted.
");
}
if($text == "/text kick" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/settext.txt","kick");    
SendMessage($chat_id," From now on, the user posting the text to kick.
");
}
}
//=========endtext===============//

////////////////////all////////////////
if($text == '/mute all'  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockall == "✖️"){    
save("data/$chat_id/lockall.txt","✔️");    
SendMessage($chat_id," ☆》all_Pσѕтιηg Hαѕ Bєєη muteє∂🔐 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》all _Pσѕтιηg Iѕ Aℓяєα∂у muteє∂ 🔒 \n_________________ \n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if($text == '/unmute all' && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockall == "✔️" ){    
save("data/$chat_id/lockall.txt","✖️");  
SendMessage($chat_id,"☆》all_Pσѕтιηg Hαѕ Bєєη Uηmuteє∂ 🔓 \n _________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}else{
    SendMessage($chat_id,"☆》all _Pσѕтιηg Iѕ Nσт muteє∂ 🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul
");
}
}
}
//=========endall===============//

//sakht//
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/unlock strict" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setsakht.txt","off");    
SendMessage($chat_id," #strict disabled🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul.
");
}
if($text == "/lock strict" && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setsakht.txt","on");    
SendMessage($chat_id," #strict activated🔓\n_________________\n🎭channel: @SOCIAL_PROGRAMMING \n 💳shop: @lYOU4Ul.
");
}
}
//##################################################################################################################################//
if($rank == "creator" or $rank == "administrator" ){  
if($text == "/join on"){
SendMessage($chat_id,"وضعیت جوین روشن شد");    
save("data/$chat_id/mt.txt","on️"); 
}


if($text == "/join off"){
SendMessage($chat_id,"وضعیت جوین خاموش شد");   
save("data/$chat_id/mt.txt","off");
}
}
//############################################################################//
if($mt == "on️"){ 
if($text || $photo || $video || $location || $sticker || $document || $contact || $music || $gif || $voice){
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
  SendMessage($chat_id,"سلام🌹
$name 
برا اینکه تو گروه بخوای چت کنی باید تو کانال ما جوین بشی وگرنه پیام هات پاک میشه
بعد از ورود به کانال برگرد تو گروه و با خیال راحت از چت کردن لذت ببر
ایدی کانال ما:
🆔: @glogah_org");

}
}
}
//###################################################################################################################################//
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){    
preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text,$match);
if($rank != "creator" && $rank != "administrator"){
if($locklink == "✔️" || $lockall == "✔️" ){     
if($setlink == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setlink == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"user $from_id Deleted because of the send link");
}
}
}
}

if(preg_match('/^(.*)([@]@|[@]@|@)(.*)|([#]#|[#]#|#)(.*)|(.*)([@]@|[@]@|@)|(.*)[@]@(.*)|[@]@(.*)|(.*)[@]@|(.*)[@]@(.*)|[@]@(.*)|(.*)[@]@/',$text) ){
preg_match('/^(.*)([@]@|[@]@|@)(.*)|([#]#|[#]#|#)(.*)|(.*)([@]@|[@]@|@)|(.*)[@]@(.*)|[@]@(.*)|(.*)[@]@|(.*)[@]@(.*)|[@]@(.*)|(.*)[@]@/',$text,$match);
if($rank != "creator" && $rank != "administrator"){
if($locktag == "✔️" || $lockall == "✔️" ){     
if($settag == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($settag == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"user $from_id Deleted because of the send tag");
}
}
}
}


if($photo){
if($rank != "creator" && $rank != "administrator"){
if($lockphoto == "✔️" || $lockall == "✔️" ){      
if($setphoto == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setphoto == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"user $from_id Deleted because of the send forward");
}
}
}
}
if($forward){
if($rank != "creator" && $rank != "administrator"){
if($lockforward == "✔️" || $lockall == "✔️" ){     
if($setforward == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setforward == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"user $from_id Deleted because of the send forward");
}
}
}
}
if($video){
if($rank != "creator" && $rank != "administrator"){
if($lockvideo == "✔️" || $lockall == "✔️" ){     
if($setvideo == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setvideo == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"user $from_id Deleted because of the send video");
}
}
}
}
if($location){
if($rank != "creator" && $rank != "administrator"){
if($locklocation == "✔️" || $lockall == "✔️" ){    
if($setlocation == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setlocation == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"user $from_id Deleted because of the send location");
}
}
}
}
if($sticker){
if($rank != "creator" && $rank != "administrator"){
if($locksticker == "✔️" || $lockall == "✔️" ){   
if($setsticker == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setsticker == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"user $from_id Deleted because of the send sticker");
}
}
}
}
if($document){
if($rank != "creator" && $rank != "administrator"){
if($lockdocument == "✔️" || $lockall == "✔️" ){      
if($setdocument == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setdocument == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"user $from_id Deleted because of the send document");
}
}
}
}
if($contact){
if($rank != "creator" && $rank != "administrator"){
if($lockcontact == "✔️" || $lockall == "✔️" ){    
if($setcontact == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setcontact == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"user $from_id Deleted because of the send contact");
}
}
}
}
if($game){
if($rank != "creator" && $rank != "administrator"){
if($lockgame == "✔️" || $lockall == "✔️" ){    
if($setgame == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setgame == "kick" || $sakht == "on" ){  
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"user $from_id Deleted because of the send game");
}
}
}
}
if($music){
if($rank != "creator" && $rank != "administrator"){
if($lockmusic == "✔️" || $lockall == "✔️" ){    
if($setmusic == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setmusic == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"user $from_id Deleted because of the send music");
}
}
}
}
if($gif){
if($rank != "creator" && $rank != "administrator"){
if($lockgif == "✔️" || $lockall == "✔️" ){    
if($setgif == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setgif == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"user $from_id Deleted because of the send gif");
}
}
}
}
if($voice){
if($rank != "creator" && $rank != "administrator"){
if($lockvoice == "✔️" || $lockall == "✔️" ){      
if($setvoice == "del" || $sakht == "off" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setvoice == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"user $from_id Deleted because of the send voice");
}
}
}
}
if($text){
if($rank != "creator" && $rank != "administrator"){
if($locktext == "✔️" || $lockall == "✔️" ){  
if($settext == "del" || $sakht == "off"){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($settext == "kick" || $sakht == "on"){  
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
sendMessage($chat_id,"user $from_id Deleted because of the send text");
}
}
}
}



if($lockbot == "✔️" ){ 
if (preg_match('/^(.*)([Bb][Oo][Tt])/s',$newchatmemberu) && $lockbot == "✔️"  && $newchatmemberu != "social_test_bot") {
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'ban bot.',
  'parse_mode'=>'html'
 ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
}


if($joinmember){
if($wel == "✔️"){    
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"$name  welcome",
        ]);
  }   
}

if($text == "/welcome on" && $add == "✔️"){
if($add == "✔️"){   
if($rank == "creator" or $rank == "administrator"){
save("data/$chat_id/wel.txt","✔️");    
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"welcome on",
        ]);
  }   
}
}
if($text == "/welcome off" && $add == "✔️"){
if($add == "✔️"){    
if($rank == "creator" or $rank == "administrator"){     
save("data/$chat_id/wel.txt","✖️");   
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"wlcome off",
        ]);
  }    
}
}

if($rt && $text=="/kick" && $add == "✔️"){
if($add == "✔️"){    
if($rank == "creator" or $rank == "administrator"){   
sendAction($chat_id, 'typing');
	bot('kickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"kick the user.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}


if($text == '/time' && $add == "✔️"){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"
ساعت:$time
تاریخ:$date",
        'parse_mode'=>"MarkDown",
            ]);
}

if($text == '/zekr' && $add == "✔️"){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>$zekr,
        'parse_mode'=>"MarkDown",        
            ]);
}

if($text == '/hadis' && $add == "✔️"){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>$hadis,
        'parse_mode'=>"MarkDown",
            ]);
}

if($text == '/danestani' && $add == "✔️"){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>$danestani,
        'parse_mode'=>"MarkDown",
            ]);
}



if($reply && $text =="/pin" && $add == "✔️"){
if($add == "✔️"){     
if($rank == "creator" or $rank == "administrator"){
 bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=> $update->message->reply_to_message->message_id
      ]);
   }
}
}

if( $text =="/unpin" && $add == "✔️"){
if($add == "✔️"){ 
if($rank == "creator" or $rank == "administrator"){
 bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
      ]);
   }
}
}

if($text == "/social" && $from_id == 381292768){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"
+  version:2.5 +   
**************
* coded by  : *
*  @lyou4ul   *
**************
 @SOCIAL_PROGRAMMING ",
        ]);
  } 
//====================special======================//
  if($text == "مدیریت" && $chat_id == $ADMIN){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"ادمین عزیز به پنل مدیریتی ربات خودش امدید",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            'keyboard'=>[
              [['text'=>"check pv"]],
              [['text'=>"check gap"]],              
              [['text'=>"bc pv"]],
              [['text'=>"bc gap"]]              
              ],'resize_keyboard'=>true
        ])
            ]);
        }
elseif($text == "check pv" && $chat_id == $ADMIN){
	sendaction($chat_id,'typing');
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
	sendmessage($chat_id , " تعداد اعضا ربات pv : $member_count" , "html");
}
elseif($text == "check gap" && $chat_id == $ADMIN){
	sendaction($chat_id,'typing');
    $userr = file_get_contents("gaps.txt");
    $memberr_id = explode("\n",$userr);
    $memberr_count = count($memberr_id) -1;
	sendmessage($chat_id , " تعداد اعضا ربات gap : $memberr_count" , "html");
}
elseif($text == "bc pv" && $chat_id == $ADMIN){
    file_put_contents("bcpv.txt","bc");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"پیام مورد نظر را در قالب متن بنویسید",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'مدیریت']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($bcpv == "bc" && $chat_id == $ADMIN){
    file_put_contents("bcpv.txt","none");
	SendAction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" کاری از    @lyou4ul .پیام شما ارسال شد",
  ]);
	$all_member = fopen( "Member.txt", "r");
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			SendMessage($user,$text,"html");
		}
}
elseif($text == "bc gap" && $chat_id == $ADMIN){
    file_put_contents("bcgap.txt","bc");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"پیام مورد نظر را در قالب متن بنویسید",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'مدیریت']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($bcgap == "bc" && $chat_id == $ADMIN){
    file_put_contents("bcgap.txt","none");
	SendAction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" کاری از    @lyou4ul .پیام شما ارسال شد",
  ]);
	$all_member = fopen( "gaps.txt", "r");
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			SendMessage($user,$text,"html");
		}
}
unlink ("error_log");
	?>


