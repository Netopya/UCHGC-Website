<?php
    session_start();

    //might want to include a system that will override based on cookies and sessions
    
    if(isset($_COOKIE["language"]))
    {
        $language = $_COOKIE["language"];
    }
    else
    {
        if (isset($_GET['lang']))
        {
            $language = $_GET['lang'];
        }
        else
        {
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
			switch ($lang){
				case "en":
					//echo "PAGE FR";
					$language = 1;
					break;
				case "fr":
					//echo "PAGE IT";
					$language = 2;
					break;
				case "uk":
					//echo "PAGE EN";
					$language = 3;
					break;        
				default:
					//echo "PAGE EN - Setting Default";
					$language = 1;
					break;
			}
        }

    }
    if (!($language ==1))
    {
        if(!($language==2))
        {
            if(!($language==3))
            {
                $language=1;
            }
        }
    }

    
    $refined_laguage = $language - 1;
    //if(!($language === 1) or !($language === 2) or !($language === 3))
    //{
    //    $language = 1;
    //}
    
    $home_button = array("Home","Accueil","Головна");
    $about_button = array("About","À propos","Про");
    $photo_button = array("Photos & Video","Photos et Video","Фото і Відео");
    $photos_button = array("Photos","Photos","Фото");
    $bulletin_button = array("Bulletin","Bulletin","бюлетень");
    $location_button = array("Location","Lieu","розташування");
    $contact_button = array("Contact","Contact","контакти");
    $link_button = array("Links","Liens","лінк");
    
    $language_label = array("Language","Langage","мова");
    
    $home_title = array("Ukrainian Catholic Holy Ghost Church - Home","L'église catholique ukrainienne Saint-Esprit - Accueil","Українська католицька Церква Святого Духа - Головна");
    $about_title = array("Ukrainian Catholic Holy Ghost Church - About","L'église catholique ukrainienne Saint-Esprit - À propos","Українська католицька Церква Святого Духа - Про");
    $photo_title = array("Ukrainian Catholic Holy Ghost Church - Photos","L'église catholique ukrainienne Saint-Esprit - Photos","Українська католицька Церква Святого Духа - Фото");
    $contact_title = array("Ukrainian Catholic Holy Ghost Church - Contact","L'église catholique ukrainienne Saint-Esprit - Contact","Українська католицька Церква Святого Духа - контакти");
    $location_title = array("Ukrainian Catholic Holy Ghost Church - Location","L'église catholique ukrainienne Saint-Esprit - Lieu","Українська католицька Церква Святого Духа - розташування");
    $links_title = array("Ukrainian Catholic Holy Ghost Church - Links","L'église catholique ukrainienne Saint-Esprit - Liens","Українська католицька Церква Святого Духа - лінк");
    
    $language_urlprefix = array("en","fr","uk");
    
    $map_source = '"https://maps.google.com/maps?q=1795+Rue+Grand+Trunk,+Montr%C3%A9al,+QC,+Canada&amp;sll=45.482238,-73.561086&amp;hl='.$language_urlprefix[$refined_laguage].'&amp;ie=UTF8&amp;hq=&amp;hnear=1795+Rue+Grand+Trunk,+Montr%C3%A9al,+Qu%C3%A9bec+H3K+2J5,+Canada&amp;t=m&amp;ll=45.482236,-73.561084&amp;spn=0.007522,0.014999&amp;z=16&amp;iwloc=A&amp;output=embed"';
    
    $map_alink = '"https://maps.google.com/maps?q=1795+Rue+Grand+Trunk,+Montr%C3%A9al,+QC,+Canada&amp;sll=45.482238,-73.561086&amp;hl='.$language_urlprefix[$refined_laguage].'&amp;ie=UTF8&amp;hq=&amp;hnear=1795+Rue+Grand+Trunk,+Montr%C3%A9al,+Qu%C3%A9bec+H3K+2J5,+Canada&amp;t=m&amp;ll=45.482236,-73.561084&amp;spn=0.007522,0.014999&amp;z=16&amp;iwloc=A&amp;source=embed"';
    
    $map_alinktext = array("View Larger Map","Agrandir le plan","Переглянути збільшену карту");
    
    $priestname = array("Fr. Volodymyr Vitt","Père Volodymyr Vitt","Парох о.Володимир Вітт");
    $priestresidence = array("Residence","Presbytère","проживання");
    $telephone = array("Telephone","Téléphone","Телефон");
    $email = array("E-mail","Courriel","E-mail");
    
    $photo1 = array("Church Exterior","Extérieur de l'église","зовнішній вигляд церкви");
    $photo2 = array("Church Altar","Autel de l'église","внутрішній вигляд церкви");
    $photo3 = array("Church Interior","Intérieur de l'église","внутрішній вигляд церкви");
    $photo4 = array("Ceiling","Plafond","церковний купол");
    
    $about_text_title = array("Ukrainian Catholic Holy Ghost Parish in the Montreal neighborhood of Point-Saint-Charles","À propos","Парафія Святого Духа м. Монтреаля в околиці Пойнт Ст.Чарльс");
    $about_text = array(
        "<p>
    Holy Ghost Parish first showed signs of its spiritual life on January 19, 1912, when Father Theodore Dvulit performed the consecration of water outside
    Saint-Gabriel church on Center Street. At the time, classes in Ukrainian were offered at the local Catholic School and a chapter of the Prosvita Society
    was also founded there. In 1929 the Sisters Servants took over teaching Ukrainian youth. On February 23, 1931, the first meeting of neighborhood
    parishioners was held, where a church committee was elected and fundraising for building a new church was initiated.
</p>
<p>
    Father Josaphat Tymochko OSBM became the first pastor. In 1934, land was purchased for construction of the church. During Father Josaphat Jean's short
    tenure as parish priest here, the church hall was built. However, due to the war and a shortage of building materials, building the church came later.
</p>
<p>
    The church's cornerstone was finally consecrated and laid on June 29, 1947; the ceremony was overseen by Father Benjamin Baranyk, Superior of the Basilian
    Fathers in Canada. Finally on March 7 the following year, the first Mass was celebrated in the newly built church, with 495 people receiving Holy Communion
    that day. The Very Reverend Bishop Isidore Borecky consecrated the church on June 27, 1948 in a grand ceremony. In 1953 the church interior was painted by
    painter Leonid Parfetsky, whereas the choirs, the sacristy and the vestibule - by painter Volodymyr Moshynsky.
</p>
<p>
    Many pastors served this parish. In chronological order: Fr. Teodor Dvulit, Fr. Ivan Perepylytsya, Fr. Mykhaylo Hryhoriychuk, Fr. Yosafat Tymochko, Fr.
    Hryhoriy Trukh, Fr. Josaphat Jean, Fr. Pavlo Hevko, Fr. Christopher Kondratiuk, Fr. Sevastian Shevchuk, Fr. Markian Pasicznyk, Fr. Nicholas Siryy, Fr.
    Volodymyr Verbitsky, Fr. Nykolay Markiv, Fr. Mychaylo Horoshko, Fr. Yaroslav Haymanovych, Fr. Hryhoriy Onufriv, Fr. Lev Chayka, Fr. Stefan Kolyankivsky,
    Fr. Ivan Hawryluk, Fr. Serhij Gar and Fr. Oleh Koretsky. Our latest pastor, Fr. Volodymyr Vitt, has served our church since September 2001.
</p>
<p>
    To date, the parish operates a branch of the UCWLC (Ukrainian Catholic Women's League of Canada), which is headed by the enthusiastic Ms. Maria Hruszowska,
    who by her own example inspires everyone to work for the good of our parish. And, although the majority of our members are of advanced age, they work
    tirelessly, organizing numerous events and care for the welfare and beauty of this church.
</p>
<p>
    The parish church committee is headed by Mrs. Marianna Nestorowich, who enjoys much prestige and respect among all our parishioners. Together with her
    husband, Mykhailo, they selflessly and with great dedication work for the good of our community. There are never any events or performances without their
    active participation. Be it organizing and conducting meetings of the Church Committee, the traditional Kutya and Sviachene (the Chrismas and Easter
    communal luncheons, respectively), running the bingo, maintaining church records, overseeing the cleanliness and proper technical condition of the church
    building and parish hall - all this, and more, rests upon their shoulders. Every Sunday Mrs. Marianna joins the ranks of the church choir, and during the
    week, together with Ms. Maria Hruszowska, she assists the pastor during Holy Masses for private intentions
</p>
<p>
    Breaking bread together in celebration of religious milestones have become a cherished tradition, starting with the Parish Kutya, which we have at
    Christmas-time, and the Sviachene which takes place during the Easter period, along with the weekly coffee and baked goods served on Sundays following
    Mass. The ever popular Bingo for the seniors of our parish is held every Tuesday at one o'clock in the afternoon in our church parish hall.
</p>
<p>
    Four altar boys minister at the altar and the choir's singing exalts both Sunday and holyday worship. Mr. Stephan Melnyk, who recently celebrated his 90th
    birthday, is the oldest active member and still performs his cantor's functions during worship.
</p>
<p>
    For obvious political reasons, many young people have left the province of Quebec over the years, and immigration quotas for those wishing to come to
    Canada from Ukraine are very small. Even for those who have immigrated here, learning two new languages isn't easy, but people do manage to adapt and
    integrate themselves within Quebec society. Therefore, the number of parishioners in Montreal and the surrounding area has been decreasing dramatically
    over a long period of time. Most of our parishioners are 70 to 80 years old.
</p>
<p>
    We are very happy to say that, in the last two years, several young immigrant families from Ukraine, with children of all ages, have joined our ranks, and
    we hope that this trend continues. The community extends its hospitality in every way possible to help the newcomers feel welcome. So far this approach
    seems to be working, as the new members tell us they feel comfortable and accepted.
</p>
<p>
    Although each and every year we see around 6 or 8 of our parishioners pass on, our parish manages to maintain its membership at around 70 families.
</p>",
        "Traduction en cours",
        "<p>
    Парафія Святого Духа подала перші ознаки свого духовного життя 19 січня 1912 року, коли священик Теодор Двуліт відправив чин Водосвяття перед костелом
    Св.Гавриїла на вулиці Сентер. Згодом у католицькій школі тут були відкриті українські класи, засновано товариство «Просвіта» . У 1929 році прибули Сестри
    Служебниці почали місію виховання української молоді. 23 лютого 1931 року відбулися перші збори парафіян цієї околиці, було вибрано Церковний Комітет і
    започатковано фонд для будови храму.
</p>
<p>
    Першим парохом став о.Йосафат Тимочко ЧСВВ. У 1934 році було закуплено площу для побудови. За часів о.Йосафата Жана, котрий був короткий час тут парохом,
    було збудовано парафіяльну залю. Сама будова храму з причин війни та браку будівельних матеріалів розпочалася дещо пізніше.
</p>
<p>
    29 червня 1947 року відбулося посвячення і закладення угольного каменя, котре здійснив Протоігумен оо. Василіян Веніамін Бараник, а вже 7 березня
    наступного року відбулося перше Богослужіння у новозбудованій церкві. До Святого Причастя в цей день приступило 495 осіб. Урочисте посвящення храму
    довершив Преосвященний кир Ізидор Борецький 27 червня 1948 року. У 1953 році церква було розмальована мистцем Леонідом Парфецьким, а хори, захристія і
    притвор- малярем Володимиром Мошинським.
</p>
<p>
    Душпастирями на цій парафії впродовж її існування були: о.Теодор Двуліт, о.Іван Перепилиця,о.Михайло Григорійчук,о.Йосафат Тимочко,о.Григорій
    Трух,о.Йосафат Жан, о.Павло Гевко,о. Христофор Кондратюк,о.Севастіан Шевчук, о.Маркіян Пасічник, о. Микола Сірий,о.Володимир Вербицький,о.Николай
    Марків,о.Михайло Горошко, о.Ярослав Гайманович, о.Григорій Онуфрів,о.Лев Чайка, о.Стефан Колянківський, о.Іван Гаврилюк, о. Сергій Ґар, о.Олег Корецький. У
    вересні 2001 року душпастирем було призначено о.Володимира Вітта.
</p>
<p>
    На сьогоднішній день при парафії діє відділ ЛУКЖК, котрий очолює п.Маруся Грушовська, котра своїм особистим прикладом та ентузіазмом надихає весь відділ до
    самовідданої праці на добро нашої парафіїї. Членкині відділу, не дивлячись на свій похилий вік, невтомно трудяться, влаштовуючи численні імпрези та дбаючи
    про добробут та красу нашого храму.
</p>
<p>
    Церковний Комітет парафії очолює п. Маріанна Несторович, котра користується великим авторитетом і повагою серед усіх наших парафіян. Разом з своїм мужем
    Михайлом вони самовіддано і з великою посвятою працюють для добра нашої громади. І не відбувається у нас жодної імпрези чи події, в котрій би вони не
    приймали найактивнішої участи. Організація і ведення засідань Церковного Комітету, традиційних Куті та Свяченого, організація Бінґа, ведення церковної
    документації, догляд за чистотою та належним технічим станом церковної будівлі та парафіяльної залі і багато-багато іншого лежить на їхніх плечах. Крім
    всього, кожної Неділі п.Маріанна долучується до церковного хору, а в будні разом з Марусею Грушовською приходять на Служби Божі приватних намірень та разом
    з священиком відправляють їх.
</p>
<p>
    Традиційними стали у нас спільна трапеза, так звана Парафіяльна Кутя, котру ми маємо в час Різдвяних свят, та Свячене, котре відбувається в Пасхальний
    період, прийняття з кавою та печивом в Неділю по Службі Божій, а кожного вівторка о 13 годині по полудні в нашій церковній залі відбувається парафіяльне
    Бінґо.
</p>
<p>
    Четверо вівтарних дружинників прислуговують при престолі, а церковний хор своїм співом звеличує недільні та святкові Богослужіння. Пан Стефан Мельник,
    котрий недавно відсвяткував 90-ти літній ювілей своїх уродин, є найстаришим його учасником і фактично відправляє всі дяківські функції під час Богослужінь.
</p>
<p>
    З відомих політичних причин багато молоді виїхало з провінції Квебек, а еміґраційні квоти для бажаючих приїхати до Канади з України є дуже малі. Та навіть
    тим, що вже приїхали не є легко вивчити дві чужі мови, щоб хоч так-сяк адаптуватися в Квебеку. Тому численність парафіян в Монтреалі і його околицях на
    протязі довгого часу дуже стрімко зменшується. Більшість наших парафіян віком 70-80 літ.
</p>
<p>
    Втіхою для нас є те, що за останні 2 роки до нашої парафії прибуло з України кілька молодих родин із дітьми різного віку і ми сподіваємося що ця тенденція
    буде мати своє продовження. Громада гостинно ставиться до них і у всякий спосіб, наскільки це можливо, старається їм допомогти. Тому, здається, вони тут
    відчувають себе затишно.
</p>
<p>
    Так що, незважаючи на те, що яких 6 чи 8 наших парафіян щороку відходять від нас у Вічність, численність нашої парафії не упадає, а тримається на числі
    близько 70 осіб.
</p>"



);

    $oldabout = "<p>Парафія Святого Духа подала перші ознаки свого духовного життя 19 січня 1912 року, коли священик Теодор Двуліт відправив чин Водосвяття перед костелом Св.Гавриїла на вулиці Сентер. Згодом у католицькій школі тут були відкриті українські класи, засновано товариство «Просвіта» . У 1929 році прибули Сестри Служебниці почали місію виховання української молоді. 23 лютого 1931 року відбулися перші збори парафіян цієї околиці, було вибрано Церковний Комітет і започатковано фонд для будови храму.
    </p><p>Першим парохом став о.Йосафат Тимочко ЧСВВ. У 1934 році було закуплено площу для побудови. За часів о.Йосафата Жана, котрий був  короткий час тут парохом, було збудовано парафіяльну залю. Сама будова храму з причин війни та браку будівельних матеріалів розпочалася дещо пізніше. 
    </p><p>29 червня 1947 року відбулося посвячення і закладення угольного каменя, котре здійснив  Протоігумен оо. Василіян Веніамін Бараник, а вже 7 березня наступного року відбулося перше Богослужіння у новозбудованій церкві. До Святого Причастя в цей день приступило 495 осіб. Урочисте посвящення храму довершив Преосвященний кир Ізидор Борецький 27 червня 1948 року. У 1953 році церква було розмальована мистцем Леонідом Парфецьким, а хори, захристія і притвор- малярем Володимиром Мошинським.
           </p><p>Душпастирями на цій парафії впродовж її існування були: о.Теодор Двуліт, о.Іван Перепилиця,о.Михайло Григорійчук,о.Йосафат Тимочко,о.Григорій Трух,о.Йосафат Жан, о.Павло Гевко,о. Христофор Кондратюк,о.Севастіан Шевчук, о.Маркіян Пасічник, о. Микола Сірий,о.Володимир Вербицький,о.Николай Марків,о.Михайло Горошко, о.Ярослав Гайманович, о.Григорій Онуфрів,о.Лев Чайка, о.Стефан Колянківський, о.Іван Гаврилюк, о. Сергій Ґар, о.Олег Корецький. 
                  </p><p>На сьогоднішній день при парафії діє  відділ ЛУКЖК, котрий очолює п.Маруся Грушов-ська, котра своїм особистим прикладом та ентузіазмом надихає  весь відділ до самовідданої праці на добро нашої парафіїї. Членкині відділу, не дивлячись на свій похилий вік, невтомно трудяться, влаштовуючи численні імпрези та дбаючи про добробут та красу нашого храму. 

       </p><p> Церковний Комітет парафії очолює п.Іван Маріанна Несторович, котра користується великим авторитетом і повагою серед усіх наших парафіян. Разом з своїм мужем Михайлом вони самовіддано і з великою посвятою працюють для добра нашої громади. І не відбувається у нас жодної імпрези чи події, в котрій би вони не приймали найактивнішої участи. Організація і ведення засідань Церковного Комітету, традиційних Куті та Свяченого, організація Бінґа, ведення церковної документації, догляд за чистотою та належним технічим станом церковної будівлі та парафіяльної залі і багато-багато іншого лежить на їхніх плечах. Крім всього, кожної Неділі п.Маріанна долучується до церковного хору, а в будні  разом з Марусею Грушовською приходять на Служби Божі приватних намірень та разом з священиком відправляють їх.

     </p><p>Традиційними стали у нас спільна трапеза, так звана Парафіяльна Кутя, котру  ми маємо в час Різдвяних свят, та Свячене, котре відбувається в Пасхальних період,  прийняття з кавою та печивом  в Неділю по Службі Божій, а  кожного вівторка о 13 годині по полудні в нашій церковній залі відбувається парафіяльне Бінґо. 

</p><p>Четверо вітарних дружинників  прислуговують при  престолі, а церковний хор своїм співом звеличує недільні та святкові Богослужіння. Пан Стефан Мельник, котрий недавно відсвяткував 90-ти літній ювілей своїх уродин, є найстаришим його учасником і  фактично відправляє всі дяківські функції під-час Богослужінь.

         </p><p>З відомих політичних причин багато молоді виїхало з провінції Квебек, а еміґраційні квоти для  бажаючих приїхати до Канади з України є дуже  малі. Та навіть тим, що вже приїхали не є легко вичити  дві чужі мови, щоб хоч так-сяк адаптуватися в Квебеку. Тому численність парафіян в Монтреалі і його околицях на протязі довгого часу дуже стрімко зменшується. Більшість наших парафіян віком 70-80 літ. 

  </p><p>Втіхою для нас є те, що за останні 2 роки до нашої парафії прибуло з України кілька молодих родин із дітьми різного віку  і ми сподіваємося що ця тенденція буде мати своє продовження. Громада гостинно  ставиться до них і у всякий спосіб, наскільки це можливо, старається їм допомогти. Тому, здається,  вони тут відчувають себе затишно.

           </p><p>Так що, незважаючи на те, що яких 6 чи 8 наших парафіян щороку відходять від нас у Вічність, численність нашої парафії не упадає, а тримається на числі близько 90 осіб.


</p><p>о.Володимир Вітт - парох </p>

";
    
    	/*
		</p><p>*As of Sunday, June 30th, the summer schedule will be followed: <ul><li>Every first Sunday of the month - 10:30 am</li><li>Every other Sunday - 8:30 am</li></ul>
		</p><p>*Débutant Dimanche le 30 Juin, l'horaire d'été sera suivi:<ul><li> Premier dimanche du mois - 10h30 </li><li> Tous les autres dimanches - 8h30 </li></ul>
		</p><p>*Починаючи з Неділі 30 червня, ми переховимо на літній розпорявок богослужінь:<ul><li>кожної першої Неділі місяця — 10:30 година ранку</li><li>інші Неділі  -  8:30 година ранку</li></ul>		

	*/

    $schedual_text = array(
        "Sunday Worship held on the following schedule:<ul><li>Every first Sunday of the month - 11:00 am</li><li>Every other Sunday - 9:00 am</li></ul>","Messes dominicales: <ul><li> Premier dimanche du mois - 11h00 </li><li> Tous les autres dimanches - 9h00 </li></ul>",
        "Недільні  Богослужіння відбуваються за наступним розпорядком:<ul><li>кожної першої Неділі місяця — 11:00 година ранку</li><li>інші Неділі  -  9:00 година ранку</li></ul>"
        
        
    );

    $schedual_text_summer = array(
        "Sunday Worship held on the following schedule:<ul><li>Every first Sunday of the month - 11:00 am</li><li>Every other Sunday - 9:00 am</li></ul> </p><p>*As of Sunday, June 29th, the summer schedule will be followed: <ul><li>Every first Sunday of the month - 10:30 am</li><li>Every other Sunday - 8:30 am</li></ul>",
        "Messes dominicales: <ul><li> Premier dimanche du mois - 11h00 </li><li> Tous les autres dimanches - 9h00 </li></ul> </p><p>*Débutant Dimanche le 29 Juin, l'horaire d'été sera suivi:<ul><li> Premier dimanche du mois - 10h30 </li><li> Tous les autres dimanches - 8h30 </li></ul>",
        "Недільні  Богослужіння відбуваються за наступним розпорядком:<ul><li>кожної першої Неділі місяця — 11 година ранку</li><li>інші Неділі  -  9 година ранку</li></ul> </p><p>*Починаючи з Неділі 29 червня, ми переховимо на літній розпорявок богослужінь:<ul><li>кожної першої Неділі місяця — 10:30 година ранку</li><li>інші Неділі  -  8:30 година ранку</li></ul>"
        
        
    );
	
	$schedual_text_new = array(
		"Sunday Worship is held at 9:00am or 11:00am depending on the month. The schedule for the next 3 month is as follows:<ul><li>March - 9:00am</li><li>April - 11:00am</li><li>May - 9:00am</li></ul>",
		"Les messes dominicales auront lieu soie à 9h ou 11h dependant du mois. L'horaire pour les prochains 3 mois est le suivant:<ul><li>Mars - 9h</li><li>Avril - 11h</li><li>Mai - 9h</li></ul>",
		"Кожного місяця нелільні і святкові Богослужби будуть починатвися почергво О 9 або 11 годині <ul><li>Березень – 9 година</li><li>Квітень – 11 година</li><li>травень – 9 година</li><li>і так далі</li></ul>"
	);
    
    $xmas2013_title = array("Christmas December 2019 Liturgies","Liturgies de Noël Décembre 2019","Різдвяні 2019 Грудень літургії");
    $xmas2013_content = array(
        "<ul>
            <li class=\"nobulletli\">Wednesday 25 - Nativity of Jesus Christ
                <ul>
                    <li>11:00am - Christmas Divine Liturgy</li>
                </ul>
            </li>
        </ul>"
        ,"<ul>
            <li class=\"nobulletli\">Mercredi le 25 - Nativité de Jésus-Christ
                <ul>
                    <li>11h00 - Divine Liturgie de Noël</li>
                </ul>
            </li>
        </ul>"
        ,"<ul>
            <li class=\"nobulletli\">Середа 25 - Різво Христове
                <ul>
                    <li>11:00 - Святкова Служба Божа</li>
                </ul>
            </li>
        </ul>"
    );
    
    $kutia_title = array("Our traditional Kutia 2020","Notre Kutia traditionnelle 2020","Наша спільна парафіяльна Кутя 2020");
    $kutia_text = array(
    "Our traditional parish \"Kutia\" will take place after Divine Liturgy on <strong>Sunday, Jan 12th</strong>; on that day Divine Liturgy will begin at 11:00 am",
    "Notre Kutia de paroisse traditionnelle aura lieu après la Divine Liturgie le <strong>dimanche 12 janvier</strong>, ce jour-là la Divine Liturgie débutera à 11h00",
    "Відвудетьс по Службі Божій в Неділю, 12 січня 2020. В цей день Служба Божа почнеться о 11.00 год."
                  
                    
                        );
    
    
    $indexh = array("Ukrainian Catholic Holy Ghost Church in Montreal","L'église catholique ukrainienne Saint-Esprit à Montréal","Українська Католицька Церква Святого Духа в Монреалі");
    
    $psy2013_title = array("Pysanky courses 2016","Cours de Pysanky","Kурси Pysanky");
    $psy2013_content = array("Pysanky courses are being held on the following Fridays at 7:00pm: February 26<sup>th</sup>, March 4<sup>th</sup>, 11<sup>th</sup>, and 18<sup>th</sup>, and April 1<sup>st</sup>, 8<sup>th</sup>, 15<sup>th</sup>, and 22<sup>nd</sup>.","Les cours de Pysanky sont offerts les vendredis suivant à 7h du soir: Le 26 Fevrier, les 4, 11, 18 Mars, et les 1, 8, 15, 22 Avril.","Курси Писанкарства відбуватимуться о 7 год. вечера в наші церковні залі в наступні дні: 26 лютого; 4,11,18 берзня; 1,8,15,22 квітня.");
    
	
	$psy2013_old_title = array("Pysanky courses 2014","Cours de Pysanky 2014","Kурси Pysanky 2014");
	
    $link1 = array("Ukrainian Greek Catholic Church <br/>Lviv, Ukraine","Eglise Ukrainienne gréco-catholique Eglise <br/>Lviv, Ukraine","Українська Греко-Католицька Церква </br>Львів Україна");
    $link2 = array("The Ukrainian Catholic Eparchy of Toronto and Eastern Canada","Le diocèse catholique ukrainienne de Toronto et l'Est du Canada","Українська католицька єпархія Торонто і Східної Канади");
    $link3 = array("Ukrainian Time<br/>Ukrainian radio program in Montreal, Canada","Le Temps Ukrainien<br/>Émission radiophonique ukrainienne à Montréal, Canada","Український Час<br/>Українськa радіопрограмa в Монреалі, Канада");

    $lent2013_title = array("Lenten Mission","Le recueillement du carême","Великопостні Реколекції");
    $lent2013_text = array("Schedule of Lenten Mission in our parish:<br/>Thursday March 15th - 10am<br/>Friday March 16th – 7pm<br/>Saturday March 17th – 10am<br/>Our guest speaker will be Fr. Ihor Oshchipko","Le recueillement du carême dans notre paroisse aura lieu selon l'horaire suivant:<br/>Jeudi 15 mars - 10:00<br/>Vendredi 16 mars – 19:00<br/>Samedi 17 mars 10:00<br/>Le recueillement va se faire par le père Ihor Oshchipko","Великопостні Реколекції в нашій парафії відбудуться за наступним розпорядком:<br/>четвер 15 березень - 10 год. рано<br/>пятниця 17 березень - 7  год.Вечора<br/>Субота 18 березень - 10 год.рано.<br/>Реколекції буде провадити о. Ігор Ощіпко");

    $e_t = array("Easter Weekend Schedule","Calendrier de la fin de semaine Pascale","Великодній тиждень розклад");
    
    $e_2d = array("Thursday, April 25th<br/>5:00 PM","Jeudi le 25 avril</br>17:00h","ЧЕТВЕР,25 квітня</br>17:00");
    $e_2t = array("Reading of the 12 Gospels...the Passion of Christ","La lecture des 12 évangiles ... la Passion du Christ","Утрення Страстей (читання 12 Євангелій )");
    $e_3d = array("Friday, April 26th<br/>5:00 PM","Vendredi le 26 avril</br>17:00","П‘ЯТНИЦЯ, 26 квітня</br>17:00");
    $e_3t = array("Vespers,  procession with \"Plashchanycia\""," Vêpres, procession avec «Plashchanycia»","Вечірня   з виносом  Плащениці");
    $e_4d = array("Saturday, April 27th<br/>5:00 PM","Samedi le 27 avril<br/>17:00h","СУБОТА, 27 квітня<br/>17:00");
    $e_4t = array("Blessing of \"Pascha\"  (Easter Baskets) *one time only...in our parish hall, 1770 Centre St.","Bénédiction des «Pacha» (Paniers de Pâques), 1770 rue Centre","свячення Пасок  (один раз ! ),1770 Centre St.");
    $e_5d = array("Sunday, April 28th<br/>Ressurection of Our Lord","Dimanche le 28 avril</br>Résurrection de Notre-Seigneur","НЕДІЛЯ, 28 квітня</br>Воскресіння Господнє – Пасха");
    $e_5t = array("7:15 AM - Ressurectional Matins</br>8:00 AM - Paschal Divine Liturgy","7:15 - Résurrection Matins</br>8:00 -- Liturgie divine Pascale","7:15 Надгробне.  Утрення</br>8:00 Пасхальна Служба Божа");
    $e_6d = array("Monday, April 29th<br/>9:00 AM","Lundi le 29 avril</br>9:00h","ПОНЕДІЛОК, 29 квітня</br>9:00");
    $e_6t = array("Bright Monday -- Divine Liturgy","Lumineux Lundi - liturgie divine","СВІТЛИЙ ПОНЕДІЛОК");

    $eb_h = array("Easter Banquet","Banquet Pâques","СПІЛЬНЕ ПАРАФІЯЛЬНЕ СВЯЧЕНЕ");
    $eb_t = array("Our traditional \"Sviatchene\" (Easter Banquet) will be held on Sunday, May 5th, after Divine Liturgy, which on that day will commence at 11:00 AM.","Notre traditionnelle «Sviatchene» (Banquet Pâques) aura lieu le dimanche 5 mai, après la divine liturgie qui commencera cette journée, à 11 h.","СПІЛЬНЕ ПАРАФІЯЛЬНЕ СВЯЧЕНЕ  відбудеться  в  Неділю, 5 травень по Службі Божій. В цей день Служба Божа служитиметься о 11:00");

	$gr2013_title = array("Ukrainian Catholic Green Sunday Memorial Service","Service commémoratif catholique du dimanche vert ukrainien","Неділя Зіслання Святого Духа похід і соборна панахида на цвинтарі");
	$gr2013_content = array("Sunday, June 19, 2015 at 2:00 p.m at the Notre-Dame-des-Neiges Cemetery. Procession from the administration building to the Ukrainian monument","Dimanche 19 juin, 2015 à 14 h au cimetière Notre-Dame-des-Neiges. Procession du bâtiment de l'administration au monument ukrainien","Неділя, 19 червня 2015 о. 2:00 на цвинтарі. Процесія від і адміністрації будинок до українського пам'ятник");



	$sch2013_title = array("Catechism Classes","Classes de catéchisme","Yроки катехизму");
	$sch2013_content = array("Starting Sunday September 15th; Catechism classes for the children will commence. These will take place in our church hall immediately after Liturgy. All children are cordially invited.","À partir du dimanche 15 septembre, les classes de catéchisme pour les enfants débuteront. Elles auront lieu dans notre salle paroissiale immédiatement après la liturgie. Tous les enfants sont cordialement invités.","Починаючи неділю 15 вересень, розпочинаємо уроки катехизму для дітей, котрі будуть відбуватися відразу по закінченні Недільної Служби Божої у нашій церковній залі. Всіх дітей гостинно запрошуємо.");

	$ny14t = array("New Year 2014","Nouvel An 2014","Новий Рік 2014");
	$ny14c = array("Divine Liturgy January 14th 9:00 AM","Liturgie Divine le 14 janvier 9h00","Святкова Служва Божа. 14 січня (вівторок) 9:00 год.");
	$ny214t = array("Theophany – \"Yordan\"","Théophanie - \"Yordan\"","Боявлення");
	$ny214c = array("January 19th (Sunday) 9:00 AM Divine Liturgy and Blessing of Water.","Le 19 janvier (dimanche) 9h00 Divine Liturgie et la bénédiction de l'eau.","19 січня (неділя) 9:00 год. Служва Божа Велике Водосвяття");

    $photo_church_title = array("Photos of the church","Photos de l'église","Фотографії церкви");
    $kutia_photo_14 = array("Kutia 2014", "Kutia 2014", "спільна парафіяльна Кутя 2014");

    $eas14 = array("For  Your  Information:  This  Year  Easter  Falls  On  April  20<sup>th</sup>","Pour Votre Information: Cette année, Pâques est le 20 Avril","Повідомляємо :  Великодні  Свята  Цього  Року  Припадають  20-Го  Квітня");

    $visit1_t = array("Monday, May 12th","Lundi le 12 mai","Понеділок , 12 травня");
    $visit1_c = array("As part of his Patriarchal Visitation in Montreal, Patriarch Sviatoslav will be visiting our parish on Monday, May 12th. He is expected to arrive here between 10:30 and 11:00. There will be a short prayer service in our church followed by a reception in our parish hall. Tickets for this event are 30$ per person and are available now. Please reserve your tickets as soon as possible; there will be no tickets sold at the door.","Dans le cadre de sa visite patriarcale à Montréal, le lundi 12 mai, Patriarche Sviatoslav va rendre visite à notre paroisse. Il devrait arriver entre 10h30 et 11h00. Il va avoir une courte prière à notre église suivie d’une réception à notre salle paroissiale. Les billets pour cette réception sont disponibles maintenant au coût de 30.00 $ par personne. On vous en prie de réserver vos billets le plus tôt possible; car aucun ne sera en vente à l’entrée.","Блаженійший Патріарх Святослав відвідає нашу парафію в понеділок , 12 травня приблизно о 10:30 рано. Відудеться коротка молитва і прийняття в нашій парафіяльній залі. Квитки 30 доларів просимо замовляти в п. Маріанни Несторович вже тепер. При дверах ьілети продаватися не вудутью.");


    $visit2_t = array("On Sunday May 11th, 2014, there will not be any Liturgy at our parish","Le dimanche 11 mai 2014, il n'y aura pas de Messe dominicale à notre paroisse","Неділя 11-го травня -- Служби Божої в наші парохії не буде");
    $visit2_c = array("Everybody is invited to attend the Divine Liturgy, which will be concelebrated by our Patriarch Sviatoslav, Our Bishop Stefan Chmilar and all the Montreal Ukrainian clergy along with many visiting priests, at the Church of the Assumption of the Blessed Virgin Mary &#x2014; (corner of Bellechasse and 10th Ave., Rosemont) at 9:00 AM.","Tout le monde est invité à participer à la Divine Liturgie, qui sera concélébrée par notre Patriarche Sviatoslav, notre évêque Stefan Chmilar et tout le clergé ukrainien de Montréal ainsi que de nombreux prêtres de passage, à l'église de l'Assomption de la Bienheureuse Vierge Marie - (au coin de Bellechasse et 10th Av., Rosemont) à 09h00.","В сей день запрошується всіх прибути на Архієрейську Божественну Літурґію, котру будуть сослужити Блаженніший Патріарх Святослав, наш Владика Стефан Хміляр і Монтрельське Ураїнське духовенство разом із священиками-гостямм з поза Монтреалу -- 9:00 год. рано у Церкві Успіння Божої Матері.");

    //$visit2_t = array("On  Sunday  May  11th, 2014,   there  will  not  be  any  Liturgy  at  our  parish","Le dimanche 11 mai 2014, il n'y aura pas de Messe dominicale à notre paroisse","Неділя  11-го  травня -- Служби  Божої  в  наші  парохії  не  буде.");
    //$visit2_c = array("Everybody  is  invited  to  attend  the  Divine  Liturgy,  which  will  be  concelebrated  by  our  Patriarch Sviatoslav,  Our  Bishop  Stefan  Chmilar  and  all  the  Montreal  Ukrainian  clergy  along  with  many  visiting priests,  at  the  Church  of  the  Assumption  of  the  Blessed  Virgin  Mary --  (corner  of  Bellechasse  and  10th Ave., Rosemont)  at 9:00 AM.","Tout le monde est invité à participer à la Divine Liturgie, qui sera concélébrée par notre Patriarche Sviatoslav, notre évêque Stefan Chmilar et tout le clergé ukrainien de Montréal ainsi que de nombreux prêtres de passage, à l'église de l'Assomption de la Bienheureuse Vierge Marie - (au coin de Bellechasse et 10th Av., Rosemont) à 09h00.","В  сей  день  запрошується  всіх  прибути  на  Архієрейську  Божественну  Літурґію,  котру  будуть сослужити  Блаженніший  Патріарх  Святослав,  наш  Владика  Стефан  Хміляр  і  Монтрельське  Ураїнське духовенство  разом  із  священиками-гостямм  з  поза  Монтреалу -- 9:00  год.  рано  у  Церкві  Успіння  Божої  Матері.");


    $visit_vid_title = array("Patriarch Sviatoslav visit, May 12<sup>th</sup>, 2014","Visite du Patriarche Sviatoslav, le 12 Mai 2014","Блаженійший Патріарх Святослав відвідання, 12 травня 2014");

    $east2014_title = array("Easter Baskets 2014","Pâques 2014","Пасха 2014");

    $sceUpdate1 = array("Beginning on Sunday December 7th, all Sunday Liturgies will begin one half hour later!","Commençant dimanche 7 décembre, la Liturgie débutera une demi-heure plus tard!","Починаючи з Неділі 7 грудня, всі Недільні Богослужіння переносяться на пів-години пізніше.");
	
	$lent2015 = array("
		<h1>Lenten  Retreat</h1>
		<p class=\"centeredpost\">Thursday  19  March -  7:00 PM<br/>Friday  20  March -  10:00 AM<br/>Saturday  21  March -  10:00 AM<br/>
      	(followed  by  coffee  and  meeting/greeting in  our  church  hall)
		<br/>The  retreat  will  be  presided  over  by Fr. Bohdan  Kostetsky,  Papal  delegate  for  the faithful  of  the  UGCC  in  Crimea
		</p>","
		<h1>Retraite de Carême</h1>
		<p class=\"centeredpost\">Jeudi 19 Mars - 19:00<br/>Vendredi 20 Mars - 10:00<br/>Samedi 21 Mars - 10:00<br/>
        (Suivis d’une rencontre et café à la salle de l'église)<br/>
		La retraite sera présidée par le père Bohdan Kostetsky, délégué pontifical pour les fidèles de la UGCC en Crimée</p>",
		"<h1>Великопостні  Реколекції</h1>
		<p class=\"centeredpost\">четвер  19  березня - 7 год.  вечора<br/>п'ятниця   20  березня - 10 год.  рано<br/>субота  21  березня - 10 год.  рано<br/>
        (кава,  зустріч  на  залі)<br/>
          Реколекції  буде  провадити  о. Богдан  Костецький
            Папський  делеґат  для  вірних  УГКЦ  в  Крмму
			</p>
		");
	
	$psy2015 = array("\"PYSANKY  COURSES\"  will  be  conducted every  Friday  during  Lent  in  our  church  hall, beginning  on  February  27 - 7:00 PM","Les COURS de pysanky seront menées tous les vendredis pendant le carême dans notre salle de l'église, à partir du 27 février - 19:00","Курси  Писанкарства  будуть  провадитися кожної  п'ятниці  підчас  Посту  в  наші  церковні залі,  поченаючи   27  лютого - 7  год.  вечером");
	
	$lentRet2015 = array("Lenten  Retreat 2015","Retraite de Carême 2015","Великопостні  Реколекції 2015");
	$lentRetFull2015 = array("Lenten  Retreat 2015 - Fr. Bohdan  Kostetsky","Retraite de Carême - père Bohdan Kostetsky","Великопостні  Реколекції - о. Богдан  Костецький");
	$kutia_photo_15 = array("Kutia 2015", "Kutia 2015", "спільна парафіяльна Кутя 2015");
	$kutia_photo_16 = array("Kutia 2016", "Kutia 2016", "спільна парафіяльна Кутя 2016");
	
	$paska2015 = array("Easter Baskets 2015","Pâques 2015","Пасха 2015");
	
	$sviatchene2015 = array("Easter Banquet 2015","Banquet Pâques 2015","СПІЛЬНЕ ПАРАФІЯЛЬНЕ СВЯЧЕНЕ 2015");
	
	$movieTitle = array("Film Showing","Présentation d'un documentaire","Показ  докуметального  фільму");
	
	$movieContent = array("Sunday November 1st, after Liturgy, in our church hall, presentation of the film \"Le cosaque et la gitane\". The film documents the life of Fr. Lev Chayka, one of our former pastors, in the far north of Quebec.","Dimanche, le 1er novembre après la liturgie, il aura une présentation du documentaire \"Le cosaque et la gitane\", à la salle de l’église. Le film documente la vie du prêtre Lev Tchaïka, un ancien curé de notre paroisse, qui demeure présentement dans la région d’Abitibi.","В Неділю 1-го листопада, по Службій Божій, в наші церковній залі, відбудеться показ докуметального фільму \"Le  cosaque  et  la  gitane\". Фільм представляє життя нашого колишнього  пароха, о. Лева Чайки в далекі Квебекські півночі.");
    
    $lent2016 = array("
        <h1>Lenten Retreat</h1>
        <p class=\"centeredpost\">Friday, April 8th 7:00PM</br>Saturday, April 9th 10:00AM</br>Sunday, April 10th 9:00AM<br/>Followed by coffee reception<br/>The retreat will be led by <strong>Fr. Roman Lahola</strong></p>
    ","
        <h1>Retraite de Carême</h1>
        <p class=\"centeredpost\">Vendredi le 8 Avril 19h00</br>Samedi le 9 Avril 10h00</br>Dimanche le 10 Avril 9h00</br>Suivis d’une rencontre et café</br>La retraite sera présidée par le père <strong>Fr. Roman Lahola</strong></p>
    ","
        <h1>Великопостні  Реколекції</h1>
        <p class=\"centeredpost\">п'ятниця  8  квітня - 7 год.  вечора<br/>субота   9  квітня - 10 год.  рано<br/>Неділя  10  квітня - 9 год.  рано<br/>
        (кава,  зустріч  на  залі)<br/>
          Реколекції  буде  провадити  о. <strong>Роман Лагола</strong></p>
    ");
	
	
	$corona_title = array("Coronavirus Updates (2020-03-21)", "Mises à jour du coronavirus (2020-03-21)", "Згідно деректив та порад з причини коронавірусу (2020-03-21)");
	
	$corona_content = array("
		<p class=\"corona_update\">
			Because of the spread of the coronavirus, the church is closed.<br>
			But the Divine services are held behind closed doors by the priest and cantors.<br>
			We continue to pray for your health and well-being.<br>
			We apologize for the inconvenience.
		</p>
	", "
		<p class=\"corona_update\">
			En raison de la propagation du coronavirus, l'église est fermée.<br>
			Mais les services divins sont tenus à huis clos par le prêtre et les chantres.<br>
			Nous continuons de prier pour votre santé et votre bien-être.<br>
			Nous nous excusons pour le dérangement.
		</p>
	", "
		<p class=\"corona_update\">
			З причини поширення коронавірусу церква є зачинена.<br>
			Але Богослужіння відбуваються за зачиненеми дверима священиком і дяками.<br>
			Ми продовжуємо молитися за ваше здоров»я і благополуччя.<br>
			Вибачаємося за незручності.
		</p>
	");
	
	$prayer1_title = array("Prayer of Pope Francis","Prayer of Pope Francis","Молитва папи Фрациска");
	
	$prayer1_content = array("
		<p>
			O Mary, you shine continuously on our journey as a sign of salvation and hope.<br>
			We entrust ourselves to you, Health of the Sick.  At the foot of the Cross you participated in Jesus' pain, with steadfast faith.  You, Salvation of the human race, know what we need.<br>
			We are certain that you will provide, so that, as you did at Cana of Galilee, joy and feasting might return after this moment of trial.<br>
			Help us, Mother of Divine Love, to conform ourselves to the Father’s will and to do what Jesus tells us. He who took our sufferings upon Himself and bore our sorrows to bring us through the Cross, to the joy of Resurrection.<br>
			We seek refuge under your protection, O holy Mother of God.  Do not despise pur pleas – we who are put to the test – and deliver us from every danger, O glorious and blessed Virgin. Amen.
		</p>
	","
		<p>
			O Mary, you shine continuously on our journey as a sign of salvation and hope.<br>
			We entrust ourselves to you, Health of the Sick.  At the foot of the Cross you participated in Jesus' pain, with steadfast faith.  You, Salvation of the human race, know what we need.<br>
			We are certain that you will provide, so that, as you did at Cana of Galilee, joy and feasting might return after this moment of trial.<br>
			Help us, Mother of Divine Love, to conform ourselves to the Father’s will and to do what Jesus tells us. He who took our sufferings upon Himself and bore our sorrows to bring us through the Cross, to the joy of Resurrection.<br>
			We seek refuge under your protection, O holy Mother of God.  Do not despise pur pleas – we who are put to the test – and deliver us from every danger, O glorious and blessed Virgin. Amen.
		</p>
	","
		<p>
			Маріє, Ти завжди освітлюєш нашу дорогу і стаєш на ній знаком спасіння і надії.<br>
			Матір Божа, довіряємось Тобі. Ти — Зцілення Хворих. Ти була близько під Хрестом і бачила біль Ісуса, але зберегла сильну віру. Ти — Спасіння людського роду, Ти знаєш, чого ми потребуємо.<br>
			Уповаємо, що Ти відповіси на наші прохання, щоб ми, подібно як у Кані Галілейській, могли радісно святкувати, коли час випробування закінчиться.<br>
			Мати Божої Любові, допоможи нам зрозуміти волю Отця і чинити те, що каже нам Ісус. Він бо взяв на себе наші страждання й також несе наші турботи, щоби привести нас, через Хрест, до радості Воскресіння,<br>
			Шукаємо притулку у Тебе і Твоєї опіки, о Пресвята Матір Бога. Не погордуй нашими благаннями — зокрема у час, коли ми піддані випробуванню, — і визволи нас від усякої небезпеки, о славна і благословенна Діво.     амінь.
		</p>
	");
?>

<?php //echo $language_urlprefix[$refined_laguage]; ?>