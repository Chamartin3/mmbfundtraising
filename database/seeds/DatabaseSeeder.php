<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Donor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	    

    	 User::create([
            'name' => ' ELAD ASULIN',
            'email' => 'eladasul@gmail.com',
            'password' => Hash::make('secret'),
            'type' => 2,
        ]);

    	User::create([
            'name' => ' Omar',
            'email' => 'ogspain@gmail.com',
            'password' => Hash::make('secret'),
            'type' => 1,
        ]);

    	User::create([
            'name' => 'yona ',
            'email' => ' iona.swr@gmail.com ',
            'password' => Hash::make('secret'),
            'type' => 2,
        ]);


(1402, '2018-09-18 06:03:05', '2018-09-18 06:03:05', "ליאור בן כמון   ", '0585807394', 'lior141000@walla.com', 0, 150, NULL, 'תורמי עבר', 'תורמי עבר', NULL),
(1403, '2018-09-18 06:03:05', '2018-09-18 06:03:05', "דורון צ\'סס   ", '058-618-6700', 'DYCheses96@aol.com', 0, 300, NULL, 'תורמי עבר', 'תורמי עבר', NULL),
(1404, '2018-09-18 06:03:05', '2018-09-18 06:03:05', "יהודה קראוס   ", '0586299913', 'hvusve@gmail.com', 0, 320, NULL, 'תורמי עבר', 'תורמי עבר', NULL),
(1405, '2018-09-18 06:03:05', '2018-09-18 06:03:05', "אלעד   ", '0586669449', 'eladfrid1000@gmail.com', 0, 150, NULL, 'תורמי עבר', 'תורמי עבר', NULL),
(1406, '2018-09-18 06:03:05', '2018-09-18 06:03:05', "דוד בוזיק   ", '0587906001', 'davidbuzik14@gmail.com', 0, 160, NULL, 'תורמי עבר', 'תורמי עבר', NULL),
(1407, '2018-09-18 06:03:05', '2018-09-18 06:03:05', "רינה   ", '0594993299', 'rinapey@gnail.com', 0, 250, NULL, 'תורמי עבר', 'תורמי עבר', NULL);


Donor::create([ 'name'   =>'ע. מיטב- אולפנת אופקים  ', 'tel'   =>'+972502728850', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'פנחס', 'tel'   =>'+972505600568', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע יהלי אופקים', 'tel'   =>'+972505718445', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. צופיה מעלות', 'tel'   =>'+972507773181', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אחינועם הבשית:)', 'tel'   =>'+972509110139', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע.אלון לוי מק"ש', 'tel'   =>'+972509703994', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ידידיה מיוחס', 'tel'   =>'+972509923086', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. רבקה רכזת מחוז יהודה', 'tel'   =>'+972523229664', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. עירית בוגרת שילת', 'tel'   =>'+972523421327', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רחלי ביתן עזות בקדושה', 'tel'   =>'+972523443423', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. לירז לוי מדרשת שילת', 'tel'   =>'+972523558995', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. שיר חדד אופקים', 'tel'   =>'+972525458444', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. מוריה עזים בקדושה- מכללה ירושלים', 'tel'   =>'+972527217966', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. נטע עמוסי שדרות', 'tel'   =>'+972533378239', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע עדנה שדרות', 'tel'   =>'+972538260495', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אוראל עזים בקדושה', 'tel'   =>'+972542571611', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלישבע ש', 'tel'   =>'+972544891460', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע טליה אופקים', 'tel'   =>'+972544922066', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. תהילה קומונרית אריאל', 'tel'   =>'+972546758876', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'א לינוי חיספין', 'tel'   =>'+972547326030', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אורית טלאור', 'tel'   =>'+972547415645', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. שירה מדרשת שילת', 'tel'   =>'+972547448828', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. שירה מדרשת שילת לא אחראית', 'tel'   =>'+972549415128', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. עדי ברכה שדרות', 'tel'   =>'+972584001602', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'א נריה (הגפן)', 'tel'   =>'+972584315319', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע.צופיה הרובע', 'tel'   =>'+972584317384', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'טל אסבן :)', 'tel'   =>'+972584498764', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע.מוריה מ.אוריה', 'tel'   =>'+972585828225', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ח.נועם', 'tel'   =>'+972586943569', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. אוריה חלמיש', 'tel'   =>'+972587171757', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. טוהר עובדיה גרעין ב"ש יבנה', 'tel'   =>'0503133436', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. מ. אפרת עופרים', 'tel'   =>'0503400313', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'עמיאל', 'tel'   =>'0505911046', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'פולובין', 'tel'   =>'0506451585', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שיר ברון', 'tel'   =>'0506764046', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. מ. מיאל שוהם', 'tel'   =>'0509702286', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ח.אריאל קסלר', 'tel'   =>'0522918551', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. מוריה אחראית', 'tel'   =>'0523720953', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אמיתי בר תקווה', 'tel'   =>'0524611404', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'איתמר כהן', 'tel'   =>'0525282531', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. עדי שבות רחל', 'tel'   =>'0528311084', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע עדנה שדרות/אריאל', 'tel'   =>'0534285042', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ת. רבקה לאה ספיר', 'tel'   =>'0534307707', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. שי אורות עציון', 'tel'   =>'0542069699', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. תחיה רכזת נוער אמציה', 'tel'   =>'0545872324', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. מ. שירה טירת יהודה', 'tel'   =>'0547417473', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. מ. רוני אחיסמך', 'tel'   =>'0547945047', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אוריאלוי', 'tel'   =>'0548003948', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. מ. חנה איילת השחר', 'tel'   =>'0548773939', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ע. מ. תהילה בית חורון', 'tel'   =>'0584141888', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יוס הדוס האח!', 'tel'   =>'0584260045', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'א. רוני', 'tel'   =>'0584455616', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'א בצי', 'tel'   =>'0584818523', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);

Donor::create([ 'name'   =>'ח.איתן חקק  ', 'tel'   =>'0585956657', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה  ', 'tipo'   =>'מעביר' ]);

Donor::create([ 'name'   =>"ע. אודיה בית שמש (סקר)", 'tel'   =>'0585963889', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);

Donor::create([ 'name'   =>'ע. מ. מיכל שטיימן', 'tel'   =>'0587994185', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'נעם לוי צוות Mmb', 'tel'   =>'+972 50-472-4033', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רעות אזולאי צוות Mmb', 'tel'   =>'+972 50-797-9354', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'גור אריה שמאי מכינת צומט פ"ת', 'tel'   =>'+972 50-867-5383', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'נאור בן זכאי צוות Mmb', 'tel'   =>'+972 52-261-2891', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שחר צוות Mmb', 'tel'   =>'+972 52-324-9799', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'מוריה דהן- מערך בנות', 'tel'   =>'+972 52-372-0953', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רפאל יניב הרוש צוות Mmb', 'tel'   =>'+972 52-854-0475', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'תהילה צוות Mmb', 'tel'   =>'+972 52-954-1888', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יהונתן נבנצל י"ת דרכי נועם פתח תקווה', 'tel'   =>'+972 53-334-0409', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'הראל שולמן צוות Mmb', 'tel'   =>'+972 53-444-4636', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יאיר נדיבי צוות Mmb', 'tel'   =>'+972 54-224-4534', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דביר הריסון צוות Mmb', 'tel'   =>'+972 54-229-4697', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שירה זריבי צוות Mmb', 'tel'   =>'+972 54-527-6695', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יהל מרקוביץ צוות Mmb', 'tel'   =>'+972 54-632-1458', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יוני שהם צוות Mmb יב', 'tel'   =>'+972 54-667-3035', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יהונתן אלטמן צוות Mmb', 'tel'   =>'+972 55-886-9275', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'חנניה בן שמעון צוות Mmb', 'tel'   =>'+972 58-424-0433', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ראובן לוזון צוות Mmb', 'tel'   =>'+972 58-435-0149', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דניאל פינקרט צוות Mmb', 'tel'   =>'+972 58-454-6832', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'נעם בירנבאום צוות Mmb', 'tel'   =>'+972 58-608-0226', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'זיו צוות Mmb', 'tel'   =>'+972 58-617-1770', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'עטרת קצובר כוכב יעקב צוות Mmb', 'tel'   =>'+972 58-624-8066', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יעל חמו', 'tel'   =>'+972 58-630-8960', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שושנה חן צוות Mmb', 'tel'   =>'+972 58-695-9135', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'מעוז רייש צוות Mmb', 'tel'   =>'+972 58-722-1582', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יהודה בן יעקב צוות Mmb', 'tel'   =>'+972 58-782-0900', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יהוידע גנזל צוות Mmb', 'tel'   =>'+972 58-798-0854', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'עיינה צוות Mmb', 'tel'   =>'+972503345890', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דניאל יהודה', 'tel'   =>'050-987-8885', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'חנניה סיירת בני עקיבא רעננה', 'tel'   =>'054-877-5736', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דוד סוזנה י"ת בני עקיבא חדרה', 'tel'   =>'058-789-8895', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יאיר אטדגי אחראי עלי מכינה', 'tel'   =>' +972547751415', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אהרון סעדון עוזר הרב שפירא', 'tel'   =>' 050-796-6374', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אביחי משניות', 'tel'   =>'+972 50-220-9106', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אורי ארביב אחראי מצפה רמון', 'tel'   =>'+972 50-280-3277', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רותם שטיין עז נתניה', 'tel'   =>'+972 50-421-4207', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אוראל משעלי אחראי עלי גבוהה', 'tel'   =>'+972 50-430-4249', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שהם בן שושן אחראי נטע שורק', 'tel'   =>'+972 50-773-3635', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אורי נקש אחראי בוגר"צ עלי', 'tel'   =>'+972 50-950-9933', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלעד כהן אחראי ראשון', 'tel'   =>'+972 50-990-4425', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'איתמר גרינבלום', 'tel'   =>'+972 52-275-8942', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'הראל אונגר עז קרנש', 'tel'   =>'+972 52-295-4335', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שירה כהן פרץ', 'tel'   =>'+972 52-300-3957', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'טליה פרץ', 'tel'   =>'+972 52-311-4870', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אור שליט בעלה של עינב', 'tel'   =>'+972 52-335-5115', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'עודד ברעם מוקד', 'tel'   =>'+972 52-353-7638', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אריאל אחראי אשקלון', 'tel'   =>'+972 52-375-9932', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אוראל פרקש אחראי ירוחם', 'tel'   =>'+972 52-398-7925', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אליה אפללו אחראי נטע שורק', 'tel'   =>'+972 52-454-1924', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלירן עז מכינת בית אל', 'tel'   =>'+972 52-556-4980', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רענן החמוד', 'tel'   =>'+972 52-566-5228', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רועי מנהל אור עציון', 'tel'   =>'+972 52-568-2471', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אסף קורך', 'tel'   =>'+972 52-583-3534', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אביעד דון', 'tel'   =>'+972 52-599-2747', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יואב פישל אחראי עצמונה חדש', 'tel'   =>'+972 52-618-6421', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שלומי פרץ', 'tel'   =>'+972 52-623-6061', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אבנר שאקי', 'tel'   =>'+972 52-656-9406', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אביאור פדלון', 'tel'   =>'+972 52-661-5102', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רון חדד עז בית אל מכינה', 'tel'   =>'+972 52-681-1817', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אריאל אחראי שבי חברון', 'tel'   =>'+972 52-696-6305', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלעד כהן אחראי עלי מכינה', 'tel'   =>'+972 52-707-4808', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רועי עז שילה', 'tel'   =>'+972 52-707-5787', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אורי קוטאי רמ חיצים', 'tel'   =>'+972 52-771-0714', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אליאב עז בית שאן', 'tel'   =>'+972 52-771-1434', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אביאל סמנכ"ל ישיבת אורות נתניה', 'tel'   =>'+972 52-789-8241', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ידידיה שפירא עז ישיבת בית אל', 'tel'   =>'+972 52-790-6064', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אריאל אחראי עטרת כהנים', 'tel'   =>'+972 52-790-6602', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דוד יעקובי אחראי עתניאל', 'tel'   =>'+972 52-797-2006', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'איתיאל אחראי ניר', 'tel'   =>'+972 52-818-7856', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אורי קרוק עז חיספין', 'tel'   =>'+972 52-836-3564', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אליהו אדרי עז שדמות מכולה', 'tel'   =>'+972 52-851-2208', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'בנצי', 'tel'   =>'+972 52-862-0259', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלעד מרק עז מעלות', 'tel'   =>'+972 52-892-4565', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אור יוסף אחראי קריית גת', 'tel'   =>'+972 53-284-5630', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אורי עשוש אחראי עלי מכינה', 'tel'   =>'+972 53-284-8470', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אברהם ממן נצח יהודה', 'tel'   =>'+972 53-708-1718', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אורן זר', 'tel'   =>'+972 53-739-3905', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'תמר קירשנבויים', 'tel'   =>'+972 54-217-7172', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'הראל אליה רמ במכינת רחובות', 'tel'   =>'+972 54-221-1581', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'גבריאל עז אורות הארי צפת', 'tel'   =>'+972 54-226-6830', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'עמית אנגל עז מעלות שיעור ד', 'tel'   =>'+972 54-245-0203', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דוד רמתי', 'tel'   =>'+972 54-287-7885', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אברהם סלומון', 'tel'   =>'+972 54-308-6444', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אברמי', 'tel'   =>'+972 54-320-6114', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אורי כהן ישיבה גבעת אולגה', 'tel'   =>'+972 54-333-1285', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'הדס', 'tel'   =>'+972 54-348-8317', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'איתן שדיאור', 'tel'   =>'+972 54-348-8387', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'איתי קליר אחראי תל אביב', 'tel'   =>'+972 54-394-3014', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דניאל אפד', 'tel'   =>'+972 54-421-1782', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אבישי עבודי', 'tel'   =>'+972 54-437-7718', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אברהם גבריאלי', 'tel'   =>'+972 54-523-6455', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רועי ישראל כנפו עז כוכב יעקב', 'tel'   =>'+972 54-528-5519', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלישע קופיאצקי', 'tel'   =>'+972 54-543-3781', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ראובן ולדמן אחראי עתניאל', 'tel'   =>'+972 54-623-1231', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אליאב גביר אחראי נתיבות', 'tel'   =>'+972 54-632-7167', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ידידיה הר כוכב עז נצרת', 'tel'   =>'+972 54-649-2667', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יאיר טולדנו-מעצב גרפי', 'tel'   =>'+972 54-652-5135', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'גלעד פישברגר', 'tel'   =>'+972 54-661-3544', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'עמית שטייניץ עז הר ברכה', 'tel'   =>'+972 54-662-8481', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אוריה אחראי יתיר', 'tel'   =>'+972 54-666-9322', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אפרים-לב התורה', 'tel'   =>'+972 54-765-6300', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלי קלומפס אחראי גוש', 'tel'   =>'+972 54-770-3079', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'איתן סיאני נוש', 'tel'   =>'+972 54-771-7083', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אבנר מזיג אחראי עלי מכינה', 'tel'   =>'+972 54-778-0676', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'גלעד ניסן אחראי שדרות', 'tel'   =>'+972 54-780-0557', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'איתי גרעין קריית גת', 'tel'   =>'+972 54-794-4076', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אילון אבוחצירא אחראי ברבנות תותחנים', 'tel'   =>'+972 54-800-2052', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דניאל זבולוני', 'tel'   =>'+972 54-800-9052', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'גדי מכטה', 'tel'   =>'+972 54-807-7043', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלירן עז טפחות', 'tel'   =>'+972 54-809-6222', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלון אחראי עלי מכינה', 'tel'   =>'+972 55-227-7166', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יאיר תמאם אחראי שדרות', 'tel'   =>'+972 55-660-2487', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אסיף יעקובי אחראי עצמונה חדש', 'tel'   =>'+972 55-660-5454', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלעד בוגוש עז נהריה', 'tel'   =>'+972 55-662-0112', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דביר שפירא עז יצהר', 'tel'   =>'+972 55-667-0155', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אוריאל בורשטיין עז כרמיאל', 'tel'   =>'+972 58-400-8282', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דביר בכר אחראי שדרות', 'tel'   =>'+972 58-411-8858', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ידידיה נוילנדר מצלמה', 'tel'   =>'+972 58-424-2529', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'גלעד עז מעלות', 'tel'   =>'+972 58-434-3111', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שלומי בורשטיין עז טפחות', 'tel'   =>'+972 58-444-2068', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ידידיה דולינסקי עז צפת הסדר', 'tel'   =>'+972 58-469-6795', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אייל נטר אחראי ראש העין', 'tel'   =>'+972 58-499-3484', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלכס קאץ', 'tel'   =>'+972 58-779-7555', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יהודה ארביב', 'tel'   =>'+972504327077', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דרור מדר', 'tel'   =>'+972508855307', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דניאל מארק אבא', 'tel'   =>'+972526126879', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אילון בן דוד', 'tel'   =>'+972546600579', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רותי הראל', 'tel'   =>'+972549327540', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אליעזר ערוץ מאיר', 'tel'   =>'050-222-6887', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אוראל יעקב עצמונה', 'tel'   =>'050-477-9707', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יאיר כהן', 'tel'   =>'050-657-5122', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אהובה יועצת חן במדבר', 'tel'   =>'050-672-5764', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אוריאל פלוס', 'tel'   =>'050-689-1250', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'בצלאל מסליס', 'tel'   =>'050-714-9642', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אהרון אחראי באח כפיר', 'tel'   =>'050-783-0307', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'גוטליב משה', 'tel'   =>'050-880-0294', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלעד כהנא אחראי ירוחם', 'tel'   =>'050-932-9353', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אביעד מלמד כהן', 'tel'   =>'050-970-0376', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אליה בבילה אחראי אשקלון חדשה', 'tel'   =>'050-997-5223', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יהושוע פרץ', 'tel'   =>'052-228-3712', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שושנה פורת', 'tel'   =>'052-334-3392', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'איתמר אטיאס', 'tel'   =>'052-382-6123', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'איתן טרגין', 'tel'   =>'052-439-8826', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אמיתי בר תקווה אחראי ירוחם', 'tel'   =>'052-461-1404', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אברהם ראש חוצניקיות במכללה', 'tel'   =>'052-485-1696', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אודי רוזנבלט', 'tel'   =>'052-554-5790', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אורי נוימן', 'tel'   =>'052-559-5157', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אילן טרבלסי', 'tel'   =>'052-569-0570', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אביעד נמט', 'tel'   =>'052-570-3605', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'תמיר אחראי שבי חברון', 'tel'   =>'052-572-6081', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'הלל מנדלוביץ', 'tel'   =>'052-595-5492', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'גבריאל פורט', 'tel'   =>'0526071802', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'איתי אביאור', 'tel'   =>'052-620-9130', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אפרים אזימוב אחראי גרעין ערד', 'tel'   =>'052-635-7331', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דניאל מארק', 'tel'   =>'052-640-1647', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אוהב ציון', 'tel'   =>'052-660-1900', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אהרן חדד אחראי עתניאל', 'tel'   =>'052-746-3888', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'תהילה מנהלת חן במדבר', 'tel'   =>'052-771-0199', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אוריאל וייס', 'tel'   =>'052-774-9998', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רועי יעוץ', 'tel'   =>'052-790-5900', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אברהם מנהל נעם ירושלים', 'tel'   =>'052-830-8103', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'בן כספי אחראי מכון מאיר', 'tel'   =>'052-835-7072', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'איתן מכינת יתיר', 'tel'   =>'052-899-0248', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אסף רוזן אחראי עתניאל', 'tel'   =>'054-222-8664', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'פנינה טי', 'tel'   =>'054-229-6540', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אברהם דוד ספרינג', 'tel'   =>'054-234-2390', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אמיתי מדריך', 'tel'   =>'054-238-0140', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אבי גרינברג', 'tel'   =>'054-284-2110', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אביעד לוינגר', 'tel'   =>'054-302-0380', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רותם חוברה', 'tel'   =>'0544660175', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אמא של המתנדב מגבעת שמואל', 'tel'   =>'054-491-8799', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אופק אחראי חדש מכון מאיר', 'tel'   =>'054-582-8581', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אוריה ביטון', 'tel'   =>'054-667-2720', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'נועה האחות', 'tel'   =>'054-667-5979', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אסף זולדן מוקד', 'tel'   =>'054-673-7314', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יהונתן בארי', 'tel'   =>'054-684-7024', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלידע רוזן אחראי אור עציון', 'tel'   =>'054-694-6800', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אביעד שלוסברג', 'tel'   =>'054-910-7106', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שמעון', 'tel'   =>'054-948-0820', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אורי מרציאנו אחראי ירוחם', 'tel'   =>'055-663-2754', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דביר במברגר', 'tel'   =>'058-452-1220', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'הראל עובדיה אחראי שדרות', 'tel'   =>'058-686-9940', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אליה תמם', 'tel'   =>'058-762-4734', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אופק קלפה', 'tel'   =>'+972 50-646-5565', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ברוך קמפינסקי', 'tel'   =>'+972 54-456-9787', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'טמיר בן דרור', 'tel'   =>'+972506620395', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'מרכז שפירא- אביה- אלון מורה', 'tel'   =>'+972523003887', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'נחמני', 'tel'   =>'+972528362424', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'עומר משה', 'tel'   =>'+972537003707', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יהונתן מור יוסף', 'tel'   =>'+972556664496', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלישיב זלצר', 'tel'   =>'050-889-3010', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'קדוש', 'tel'   =>'050-921-2712', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דוד-קבר רחל', 'tel'   =>'052-344-4110', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'מאור-מפעלים', 'tel'   =>'052-366-2665', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'בלוך', 'tel'   =>'052-423-9854', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דביר עמיאור', 'tel'   =>'052-429-5106', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אמא המדהימה האהובה מכולם', 'tel'   =>'052-465-6373', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יהודה בראונר', 'tel'   =>'052-505-2655', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'מעודה (תורם מעביר)', 'tel'   =>'052-540-9123', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אבא', 'tel'   =>'052-543-3225', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דודי רבי', 'tel'   =>'052-586-3348', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אביתר נוי', 'tel'   =>'052-605-0755', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אברהם בנימין - קרוב אליך', 'tel'   =>'052-720-3182', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'חוזה', 'tel'   =>'052-733-4778', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שמואל טבאח', 'tel'   =>'052-810-1150', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יונתן וויס', 'tel'   =>'053-338-5525', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אחיה בן יהודה', 'tel'   =>'054-246-5700', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלון אלבק', 'tel'   =>'0542512622', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'מויאל', 'tel'   =>'054-254-3771', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'משה ברקוביץ-קשר', 'tel'   =>'054-282-2388', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יהושע ויזל-יצהר', 'tel'   =>'054-549-6056', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אבנר זליגר פ', 'tel'   =>'054-591-2022', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דוד צדוק', 'tel'   =>'054-597-4740', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אביגיל', 'tel'   =>'0546332816', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אביה פרידמן', 'tel'   =>'054-810-6242', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דניאל זקס', 'tel'   =>'054-839-3456', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'נתנאל יעקב', 'tel'   =>'055-662-3465', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ירובצקי', 'tel'   =>'058-401-1065', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אייל סויסה', 'tel'   =>'', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אילון זינר', 'tel'   =>'', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יוני שועלם (תורם מעביר)', 'tel'   =>'+972 50-748-2491', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'הרב גדי. שדרות (תורם מעביר)', 'tel'   =>'+972 52-311-5817', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אליהו אסבן (תורם מעביר)', 'tel'   =>'+972 52-348-4694', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'עומר רחמים-עוזר סמוטריץ (תורם מעביר)', 'tel'   =>'+972 52-530-3772', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'קהת-סולמות (תורם מעביר)', 'tel'   =>'+972 52-576-7833', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ירון גופר (תורם מעביר)', 'tel'   =>'+972 52-674-4070', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יהודה ישראל (תורם מעביר)', 'tel'   =>'+972 52-810-9258', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שימרון כהן- מפעלות (תורם מעביר)', 'tel'   =>'+972 54-341-4180', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יעקב וינברגר- חבר של חיליק (תורם מעביר)', 'tel'   =>'+972 54-570-7501', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רונאל אלקיים (תורם מעביר)', 'tel'   =>'+972 54-648-0802', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אבישי גרשוני (תורם מעביר)', 'tel'   =>'+972523290242', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יונתן גוגק (תורם מעביר)', 'tel'   =>'+972525258062', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יוחנן בן טולילה (תורם מעביר)', 'tel'   =>'+972542457093', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יונתן גורט (תורם מעביר)', 'tel'   =>'+972584455380', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'דעאל פסנטין (תורם מעביר)', 'tel'   =>'0502362250', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יאיר שיש (תורם מעביר)', 'tel'   =>'0505877729', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'הרב יגאל ללום (תורם מעביר)', 'tel'   =>'050-609-5213', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אהרון סעדון (תורם מעביר)', 'tel'   =>'050-796-6374', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'ליאור לביא-שמור עיניך (תורם מעביר)', 'tel'   =>'050-852-9987', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'עידית/1 (תורם מעביר)', 'tel'   =>'0509092272', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יונה מרצבך (תורם מעביר)', 'tel'   =>'0509115295', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'לוי;ישי/1 (תורם מעביר)', 'tel'   =>'0509406606', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אסף אודסר (תורם מעביר)', 'tel'   =>'0509806559', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'מואטי/1 (תורם מעביר)', 'tel'   =>'0523662687', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'מוריה דהן- מערך בנות (תורם מעביר)', 'tel'   =>'052-372-0953', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>"גרצ'יק (תורם מעביר)", 'tel'   =>'0524446462', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שי שפטגנג (תורם מעביר)', 'tel'   =>'052-507-3420', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שמעון ממו (תורם מעביר)', 'tel'   =>'0525298731', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רימון;הרב/1 (תורם מעביר)', 'tel'   =>'0525456060', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'רוזנפ;אבישי/1 (תורם מעביר)', 'tel'   =>'0525522179', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אלי שועלם (תורם מעביר)', 'tel'   =>'052-591-2224', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אסף שור (תורם מעביר)', 'tel'   =>'052-625-1559', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'חיליק גוטמן (תורם מתקשר מעביר)', 'tel'   =>'052-704-9470', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'גיא-רמת בית שמש (תורם מעביר)', 'tel'   =>'0528308055', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אהרלה טריף (תורם מעביר)', 'tel'   =>'0542045844', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אורי ביליג (תורם מעביר)', 'tel'   =>'054-207-7234', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'איתן ברודר (תורם מעביר)', 'tel'   =>'054-211-9401', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'מיכל-מזכירה בית אל (תורם מעביר)', 'tel'   =>'054-229-6282', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'שמעון מלמד (תורם מעביר)', 'tel'   =>'0543252511', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'הרב שיינפלד (תורם מעביר)', 'tel'   =>'054-397-4863', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'צחי (תורם מעביר)', 'tel'   =>'0543978320', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'כהן;רעי/1 (תורם מעביר)', 'tel'   =>'0544455947', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'קורי ברדש (תורם מעביר)', 'tel'   =>'054-473-7133', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אביחי קייטס (תורם מעביר)', 'tel'   =>'0544836832', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'מתן ברוס (תורם מעביר)', 'tel'   =>'0545456435', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'גיא בובליל (תורם מעביר)', 'tel'   =>'0545686123', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'מאיר בראלי-קהילה עשהאל (תורם מעביר)', 'tel'   =>'054-570-7134', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יוני יעקובוביץ (תורם מעביר)', 'tel'   =>'0546450757', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אסף זולדן-  (תורם מעביר)', 'tel'   =>'054-673-7314', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'אילון (תורם מעביר)', 'tel'   =>'0546785909', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'נעמי (תורם מעביר)', 'tel'   =>'0547944077', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מעביר' ]);
Donor::create([ 'name'   =>'יובל תמיר צוות Mmb', 'tel'   =>'+972 50-494-1570', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'עדיאל קפלן צוות Mmb', 'tel'   =>'+972 50-544-5654', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'ספיר צוות Mmb', 'tel'   =>'+972 50-743-3014', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'שיינה צוות Mmb', 'tel'   =>'+972 50-900-2596', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'שיריאל צוות Mmb', 'tel'   =>'+972 52-510-0032', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'עז גבש אסף פרידמן', 'tel'   =>'+972 52-560-6605', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'בת ים אברהם חקק (חמל תורם)', 'tel'   =>'+972 54-454-5612', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>"לירן ירון סיירת רעננה שכבה י'", 'tel'   =>'+972 54-535-5640', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יואב פישהיימר-נועזים חשמונאים', 'tel'   =>'+972 54-568-2674', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'עומר בן דוד צוות Mmb', 'tel'   =>'+972 54-792-7260', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>"סיני אברג'ל צוות Mmb", 'tel'   =>'+972 54-942-1236', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'הלל מנדלבאום צוות Mmb', 'tel'   =>'+972 55-666-9453', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'לבונה טמיר צוות Mmb', 'tel'   =>'+972 55-884-5015', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'עידו כסלו צוות Mmb שהם', 'tel'   =>'+972 55-884-7748', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'מירי צוות Mmb', 'tel'   =>'+972 58-454-6839', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'חיות צוות Mmb', 'tel'   =>'+972 58-460-4222', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'הדס עמרם צוות Mmb', 'tel'   =>'+972 58-525-2478', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'מיכאל קניגסברג צוות Mmb', 'tel'   =>'+972 58-532-8005', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יהונתן אלגרבלי', 'tel'   =>'+972 58-556-7227', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'לירון דימרי צוות Mmb', 'tel'   =>'+972 58-599-7317', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'נועה דיין צוות Mmb', 'tel'   =>'+972 58-629-1907', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'עטרת וידר צוות Mmb', 'tel'   =>'+972 58-638-8897', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'עמיאל בניון צוות Mmb', 'tel'   =>'+972 58-688-8589', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'שילה כהן צוות Mmb', 'tel'   =>'+972 58-794-1268', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'מור ויסטוך רכז נוער עזים בקדושה', 'tel'   =>'+972504911941', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'קובי ברהום', 'tel'   =>'050-916-7643', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'ליאב סופר', 'tel'   =>'054-234-2368', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'דידי קריספין', 'tel'   =>'055-938-4411', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'ישיבת ת"א גנץ. אברהם אלוש', 'tel'   =>'058-449-2879', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'איתי', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אריאל אליהו אחראי שעלבים', 'tel'   =>'+972 50-914-1115', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יאיר יונגרייס אחראי ישיבת רמת גן', 'tel'   =>'+972 50-980-1023', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אביאל פרץ', 'tel'   =>'+972 52-434-7588', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'שגב עזים בקדושה', 'tel'   =>'+972 52-535-7543', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אורי שוורץ', 'tel'   =>'+972 52-578-3049', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אורי נביאי אחראי כרם', 'tel'   =>'+972 52-647-6008', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אביאל אחראי כרם ביבנה', 'tel'   =>'+972 52-808-4137', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יגל עז נתניה', 'tel'   =>'+972 52-825-0013', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אביתר גיל', 'tel'   =>'+972 52-828-7066', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);


Donor::create([ 'name'   =>"אביתר יצחק עז קרנ''ש   ", 'tel'   =>'+972 53-335-1898', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);


Donor::create([ 'name'   =>'אבי רביב בית עז קרנש מוקד', 'tel'   =>'+972 54-201-7328', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אביה אמסלם עזים בקדושה', 'tel'   =>'+972 54-220-3550', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'איתי שאוליאן', 'tel'   =>'+972 54-303-3776', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אוהד מנגדי עז איתמר', 'tel'   =>'+972 54-621-9180', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אודיה אסבן עזים בקדושה', 'tel'   =>'+972 58-426-0043', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יהונתן אלגרבלי אחראי חשמונאים', 'tel'   =>'+972 58-556-7227', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'דביר שריד אחראי כרם', 'tel'   =>'+972 58-627-2275', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יהודה כורסייה', 'tel'   =>'+972556631648', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>"אדיר עז קרנ''ש  ", 'tel'   =>'050-736-2829', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'קובי ברהום עזים בקדושה', 'tel'   =>'0509167643', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יואב ארנפלד', 'tel'   =>'052-802-2254', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אליהו אחראי דימונה', 'tel'   =>'054-207-9624', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יואב פישהיימר', 'tel'   =>'054-568-2674', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אייל גרין אחראי אור עציון', 'tel'   =>'054-834-7072', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אברהם אלוש אחראי תל אביב', 'tel'   =>'058-449-2879', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אביה אסבן', 'tel'   =>'058-449-8763', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אביחי אוליאל עז איתמר', 'tel'   =>'058-504-0600', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'חיים', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'גורט', 'tel'   =>'+972 58-445-5380', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אלון אורנובסקי', 'tel'   =>'+972523835272', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'מתן שגב', 'tel'   =>'+972525357543', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'מאירפלד', 'tel'   =>'+972543374567', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'נעם עמר (חמל תורם)', 'tel'   =>'050-633-9920', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'גד יאיר', 'tel'   =>'050-988-2124', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אורי שוורץ', 'tel'   =>'052-578-3049', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'כפיר מונסונגו', 'tel'   =>'052-723-2774', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אסף רוזן עותניאל (חמל תורם)', 'tel'   =>'054-222-8664', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'נדב מייזליש', 'tel'   =>'054-735-8721', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אלירן-טפחות', 'tel'   =>'054-809-6222', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יקי', 'tel'   =>'054-923-3772', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יזהר ליפשיץ', 'tel'   =>'', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'יואב', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'צבי סט (חמל תורם)', 'tel'   =>'+1 (516) 986-7288', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יאיר יונגרייס', 'tel'   =>'+972 50-980-1023', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אבי פרידמן סרט', 'tel'   =>'+972 52-265-3356', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'ליטל -הנהלת משרד', 'tel'   =>'+972 52-532-4508', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'סער חלק', 'tel'   =>'+972 52-601-8772', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אבנר שאקי (חמל תורם)', 'tel'   =>'+972 52-656-9406', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אביה אמסלם-רכזת', 'tel'   =>'+972 54-220-3550', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יואב פישהיימר-נועזים חשמונאים', 'tel'   =>'+972 54-568-2674', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אודיה פינצובר', 'tel'   =>'+972 58-426-0043', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יונתן אלגרבלי', 'tel'   =>'+972 58-556-7227', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'ליאור- כוכב עולה', 'tel'   =>'+972 58-741-1848', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יהודה שמעון כורסיה', 'tel'   =>'+972556631648', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'מור ויסטוך (חמל תורם)', 'tel'   =>'0504911941', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יאיר שרייבר', 'tel'   =>'050-766-9953', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'קובי ברהום', 'tel'   =>'0509167643', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'הרב יוגב-קרנ"ש (תורם גדול)', 'tel'   =>'052-353-5484', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'ויס;דובי/1', 'tel'   =>'0523892949', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'מתן שגב', 'tel'   =>'052-535-7543', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יצחק נוסבאום (חמל תורם)', 'tel'   =>'052-790-6913', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יואב ארנפלד', 'tel'   =>'0528022254', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'רעות גולדברגר', 'tel'   =>'054-229-9804', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'ליאב - נועזים בקדושה (חמל תורם)', 'tel'   =>'054-234-2368', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אוראל- עזים', 'tel'   =>'054-257-1611', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'טיברג;גיל (חמל תורם)', 'tel'   =>'0543978914', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'יונתן אביעד', 'tel'   =>'0545709449', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'חיים טי-חשמונאים', 'tel'   =>'054-771-8468', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'משה-בית זית (חמל תורם)', 'tel'   =>'054-850-1807', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'אביה אסבן', 'tel'   =>'058-449-8763', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'נחמיה', 'tipo'   =>'מתקשר' ]);
Donor::create([ 'name'   =>'מאור כהן', 'tel'   =>'+972 52-366-2665', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'נפתלי קראוס', 'tel'   =>'+972 54-255-3401', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'היימן אמא', 'tel'   =>'+972504526337', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'סמדי סלה', 'tel'   =>'+972506905775', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'נתנאל חבר של אביה', 'tel'   =>'+972509217652', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'אפרת ליפניק', 'tel'   =>'+972523354337', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'א.צופיה רוזנברג', 'tel'   =>'+972524239794', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'א מיכל אברמוביץ', 'tel'   =>'+972524317010', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'עדי סגרון איפרגן', 'tel'   =>'+972524733262', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'שיר ארדי', 'tel'   =>'+972525239102', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'הרב מנחם', 'tel'   =>'+972525353806', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'נאווה פריד', 'tel'   =>'+972526070899', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'א. אודיה כהן', 'tel'   =>'+972526070916', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'הרב ראוב', 'tel'   =>'+972526071773', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'ריקי שפירא', 'tel'   =>'+972526071775', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'עדיה אנקור', 'tel'   =>'+972528119080', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'אשירה מדרשה', 'tel'   =>'+972528119926', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'ע אורנית', 'tel'   =>'+972543063353', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'ע הודיה לש', 'tel'   =>'+972544347760', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>"ראות צור(פינצ'ובר)", 'tel'   =>'+972544433738', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'מושיקו קקון', 'tel'   =>'+972544456019', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'כנרת קרמר', 'tel'   =>'+972544652110', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'נתנאל גיסנו', 'tel'   =>'+972546533529', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'מיכה שוו', 'tel'   =>'+972546569171', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'ח.א. יעקב שוורץ', 'tel'   =>'+972546780053', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'שני לויט', 'tel'   =>'+972547507329', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'טובה אלדר', 'tel'   =>'+972549982006', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'איתמר טלאור', 'tel'   =>'+972556677431', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'ריבקי למאן', 'tel'   =>'+972586051407', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'הרב דודי רמת גן', 'tel'   =>'+972586275459', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);
Donor::create([ 'name'   =>'אורית ויינגרטיין', 'tel'   =>'0503295515', 'prev_amount' =>NULL,  'email'  =>'', 'origen'  =>'אודיה', 'tipo'   =>'תורם' ]);


        // $this->call(UsersTableSeeder::class);
    }
}
