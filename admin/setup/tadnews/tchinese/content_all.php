<?php
function tadnews_content($insert_id = "")
{
    global $xoopsDB, $xoopsUser;

    $uid = $xoopsUser->uid();
    $now = date("Y-m-d H:i:s");

    $sql = "delete from `" . $xoopsDB->prefix("tad_news_tags") . "`";
    $xoopsDB->queryF($sql) or die($sql);

    $sql = "INSERT INTO `" . $xoopsDB->prefix("tad_news_tags") . "` (`tag_sn`, `tag`, `font_color`, `color`, `enable`) VALUES
  (1, '公告', '#FFFFFF',  'blue', '1'),
  (2, '緊急', '#FFFFFF',  'red',  '1'),
  (3, '調查', '', '#663300',  '1'),
  (4, '活動', '#29b900',  '#0b005a',  '1'),
  (5, '注意', '#666600',  '#e6ffd0',  '0'),
  (6, '重要', '#FFFFFF', '#0066CC',  '1'),
  (7, '研習', '#FFFFFF', '#006600',  '1'),
  (8, '宣導', '#FFFFFF', '#FF0099',  '1'),
  (9, '狂賀', '#FFFFFF', '#990000',  '1');";
    $xoopsDB->queryF($sql) or die($sql);

    // $sql="delete from `".$xoopsDB->prefix("tad_news")."` where `ncsn`='{$insert_id}'";
    // $xoopsDB->queryF($sql) or die($sql);

    $sql            = "select max(sort) from `" . $xoopsDB->prefix("tad_news_cate") . "` where not_news='0'";
    $result         = $xoopsDB->query($sql);
    list($max_sort) = $xoopsDB->fetchRow($result);

    $max_sort++;
    $sql = "INSERT INTO `" . $xoopsDB->prefix("tad_news_cate") . "`
  (`of_ncsn`, `nc_title`, `enable_group`, `enable_post_group`, `sort`, `cate_pic`, `not_news`, `setup`)
  VALUES
  (0,'教育新知', '', '1', '{$max_sort}', '', '0','')";
    $xoopsDB->queryF($sql) or die($sql);
    $insert_id = $xoopsDB->getInsertId();

    $sql = "INSERT INTO `" . $xoopsDB->prefix("tad_news") . "` (`ncsn`, `news_title`, `news_content`, `start_day`, `end_day`, `enable`, `uid`, `passwd`, `enable_group`, `counter`, `prefix_tag`, `always_top`, `always_top_date`, `have_read_group`, `page_sort`) VALUES
  ('{$insert_id}',  '網站建置中',  '<p>歡迎蒞臨本網站，網站目前尚在建置中，資料會陸續上線，若有找不到的資料，歡迎留言或跟網站管理者聯繫，也歡迎您提供建議，讓本網站更為完整並符合需求。</p>\r\n',  '{$now}' ,  '0000-00-00 00:00:00',  '1',  '{$uid}',  '', '', 1, '1',  '0',  '0000-00-00 00:00:00',  '', 0),

  ('{$insert_id}',  '大腦愈開心，學得愈好！高效學習６個祕密',  '<div class=\"dpMain\" id=\"content\">\r\n<div class=\"cp\" id=\"cp\">\r\n<p>據研究，人僅僅意識到自身認知活動的5％，大部份的情感、行動是怎麼發生的，我們並不知所以然，例如為何對某人一見鍾情、心情不好就亂買東西、或聽到一首歌突然流下眼淚。</p>\r\n\r\n<p>直到20世紀，科學家才有辦法觀測大腦活動狀態，發現重量不過1公斤多一點的大腦，掌握著人類命運的鑰匙，人會變得更好或更壞，關鍵都在大腦裡，「大腦產生觀念，觀念產生行為，行為產生結果，結果又改變大腦，」中央大學認知神經科學研究所所長洪蘭指出大腦塑造的循環。</p>\r\n\r\n<p>數百萬年來，人類祖先克服無數險惡的環境與挑戰生存下來。現代人的大腦，可說是經過無數次升級改良的精品，足以適應各種各樣的狀況，也具有解決問題的無窮潛力。</p>\r\n\r\n<p>歸納整理對於大腦最新的研究與發現，你必須掌握幾個重點：正確理解大腦的運作趨向→善用啟發心智的方法→強化個人優勢，大腦就能幫助你發光發熱，成就最好的自己。</p>\r\n\r\n<p><strong>別再用錯你的腦</strong></p>\r\n\r\n<p><strong>腦細胞會死，神經可塑性卻持續一生</strong></p>\r\n\r\n<p>人們常以為，聰明靈巧是天才的專利，事實上可能是你誤解自己的腦，它才無法盡情發揮。「成年人的大腦不能改變」這觀念其實大錯特錯。害得很多家長忙著在孩子連話都不會說時就送去「開發大腦」，以為這樣能確保孩子的聰明才智。</p>\r\n\r\n<p>愈來愈多研究證明，成人的大腦依然具有可塑性，能因應環境改變及獲取新的訊息，所有的生活經驗都會改變大腦神經迴路的設定，不管是認識新朋友還是發明回家的新路徑。</p>\r\n\r\n<div class=\"dpMain\" id=\"content\">\r\n<div class=\"cp\" id=\"cp\">\r\n<p>美國腦神經科學家莫山尼克（Michael Merzenich）便是神經可塑性領域的頂尖翹楚之一，他研發的訓練軟體Fast ForWorld成功幫助學習障礙的孩子改進認知功能，針對銀髮族鍛鍊大腦的軟體Brain Fitness Program Classic及InSight，則能改善老人衰退的記憶力、思考力和提高資訊的處理速度。</p>\r\n\r\n<p>就算無法使用這些神奇的軟體，也可以磨利自己的大腦：記住，人的大腦非常害怕無聊。要去學完全嶄新的、需要全神貫注才學得會的東西，啟動大腦可塑性的控制系統。如果你每天走同樣的路線上班、工作早已駕輕就熟，社交圈裡只有老朋友……很遺憾，你的大腦可塑性系統已經僵化了。</p>\r\n\r\n<p>「我們的大腦就是來演化對新奇的東西起反應的，如果要充分感受到自己活著，就必須不斷地學習，」這是《改變是大腦的天性》作者多吉醫師（Norman Doidge）的忠告。努力幫大腦找新鮮的樂子吧！它會用心智年輕來感謝你。</p>\r\n\r\n<p><strong>大腦隨時在活化自己，要多挑戰它</strong></p>\r\n\r\n<p>「人終其一生90％的腦細胞都在沉睡，真正運用的不到10％」，這句廣告詞其實是一則沒有證據（甚至連來源都不清楚）的偽科學神話，卻誤導人類幾十年。</p>\r\n\r\n<p>腦部掃描的研究顯示，大腦幾乎時時處於整體活化的狀態，例如你能邊讀這篇文章邊吃東西，就是大腦各個區域互相協調工作的結果。人的大腦為了生存絕不浪費任何能量，閒閒沒事幹的神經元馬上會被修剪取代，依據用進廢退的鐵則，大腦裡根本不會留著沒開發的腦細胞佔用空間。</p>\r\n\r\n<div class=\"dpMain\" id=\"content\">\r\n<div class=\"cp\" id=\"cp\">\r\n<p>多挑戰自己的心智，讓大腦神經元網路連結得更密集，才是真正的全腦開發。</p>\r\n\r\n<p><strong>兩個半腦要合作，不可能單獨開發右腦</strong></p>\r\n\r\n<p>「左腦重理性，右腦重感性，人類未知的潛能都蘊藏在右腦中，開發右腦可以大幅提升所有能力」這種強調右腦的優越性，似是而非的教養迷思，讓許多父母心甘情願把錢掏出來讓孩子去「右腦開發」。</p>\r\n\r\n<p>但精密的腦部造影技術證實在嬰兒發展時期，大腦兩邊已能同時處理訊息，沒有所謂3歲前是右腦主導大腦，可用某種方法激發右腦活力，或6歲後優勢從右腦切換到左腦的說法。</p>\r\n\r\n<p>大 腦雖然的確分成左右腦，卻不是獨立運作，「將左右腦分開討論是很誘人的做法，但它們實際上是兩個半腦，原本就設計在一起工作，成就一個柔軟、單一、整合型 的完整大腦，」倫敦大學學院心理學與醫學教育系教授，《左手、右手：探索不對稱的起源》作者麥克麥納斯（Chris McManus）指出。</p>\r\n\r\n<p>兩 半腦間以胼胝體相連，協助左右半腦溝通協調，大腦的每項功能都需要兩個半腦通力合作。例如很多人以為欣賞音樂是右腦在主導，「右腦是對旋律很靈敏。但理解 音樂結構變化（樂理）的能力，卻是左腦比較強，」中研院院士、行政院政務委員曾志朗教授解釋，左右半腦各有相對優勢，分工合作才能處理好任務。</p>\r\n\r\n<p>胼胝體正常相連的狀況下，左右半腦訊息交流的速度非常快，「千分之一秒就傳過去了，」洪蘭指出，不可能單獨訓練左腦或右腦，「也沒有用左手寫字鍛練右腦這回事，」她強調。</p>\r\n\r\n<div class=\"dpMain\" id=\"content\">\r\n<div class=\"cp\" id=\"cp\">\r\n<p><span style=\"color: #800000\"><strong>高效學習6個祕密</strong></span></p>\r\n\r\n<p>在腦科學定義裡，學習並非發生在固定的時間、場所或限於某些知識。當神經元受到刺激而連結重組，形成新的迴路使行為發生變化，就是學習。因此女孩子研究怎麼化美美的妝是學習，業務員想辦法提升業績是學習，甚至「在正確的時機說該說的話」都是學習。</p>\r\n\r\n<p>學習深深影響人生各個面向，順著大腦特性栽培，神經元網路將更建構得更完善，宛如不斷開發擴建的新興城市。</p>\r\n\r\n<p><strong>1.大腦愈開心，學得愈好</strong></p>\r\n\r\n<p>近 50年，科學家發現腦內的化學傳導物質，和建立神經細胞迴路密切相關。有些傳導物質能活化或抑制神經細胞，有些則能促進腦內特定的生化反應，加快學習的速 度。化學傳導物質是否平衡，會影響學習的速度、記憶的穩固，「神經傳導物質分泌不正常，大腦運作就會失靈，」曾志朗指出。</p>\r\n\r\n<p>帶來快樂感覺的神經傳導物質多巴胺，便是提升學習效能的要角之一。當達成目標時，多巴胺會大量分泌令人欣喜莫名，同時也讓達成目標那個行為的神經迴路連結得更緊。</p>\r\n\r\n<p>而負責愈高層次任務的皮質區，神經細胞的多巴胺接受器愈多，「學會新事物、成功解決問題，都會讓多巴胺釋放，」曾志朗解釋，如此人才會積極突破困境、精益求精，不斷演化下去。</p>\r\n\r\n<p>研究證實多巴胺會刺激大腦可塑性改變：行為開始→經過嘗試錯誤終於成功→得到成就感和報酬→多巴胺釋放快感湧出→固化達成該行為的神經迴路→增強嘗試的動機→再次做該行為。</p>\r\n\r\n<div class=\"dpMain\" id=\"content\">\r\n<div class=\"cp\" id=\"cp\">\r\n<p>善用這個學習的良性循環，不分年齡、性格或際遇，誰都可以強化學習，重塑大腦。</p>\r\n\r\n<p>■ 保持動機：達成目標、得到報酬的欲望，是促使人前進的動力。失去鬥志時，「尋找心中憧憬的前輩，效法他的一舉一動，可以幫助自己振作起來，」腦科學者、東 京工業大學大學院知能系統科學協力教授茂木健一郎認為，模仿是大腦重要的學習方式，僅僅只是觀察他人的動作，前額葉運動區的鏡像神經元也會活化，特別是愈 欣賞的對象，愈能夠激勵自己見賢思齊。</p>\r\n\r\n<p>而從小課題開始累積快樂的成功經驗，稱讚自己，會更有自信和動力克服難關。</p>\r\n\r\n<p>■樂觀的威力：當人對未來有美好想像時，大腦負責情緒判斷處理的杏仁核及吻側前扣帶皮質（rACC）會活化，覺得好事就在不遠處，更勇於行動。</p>\r\n\r\n<p>專 門製造巨大石油化學設備的日本日揮公司建設現場所長高橋直夫，30年來在世界各地負責建造石化設施，聞名全球石化界。目前在沙烏地阿拉伯現場管理高達 7000多位各國員工，每天都有各式各樣的麻煩，「笑著工作」卻一直是他的原則，「無論發生什麼困難，領導者都要像太陽一樣的開朗明亮，」他說。</p>\r\n\r\n<p>笑不是逃避現實，而是無所畏懼、絕不放棄的宣示，不但穩定軍心，「更容易釐清事情的脈絡，綜觀全局解決問題，」高橋直夫的經驗中，笑的作用不可小覷。</p>\r\n\r\n<div class=\"dpMain\" id=\"content\">\r\n<div class=\"cp\" id=\"cp\">\r\n<p>「裝笑也有相同的效果，」茂木健一郎指出，口角上揚做出笑的表情，和真心發笑活化的大腦區域相同，一樣能增加抗壓性，減少負面想法。</p>\r\n\r\n<p><strong>2.愛運動，頭腦更聰明</strong></p>\r\n\r\n<p>當你了解運動和心智功能的關聯，可能會怨恨過去常蹺掉體育課，「大腦是在走路運動時發展出來的，」發展生子生物學家、《大腦當家》作者麥迪納（John Medina）指出，人類祖先平均一天要走20公里，支持大腦不斷演化的，「是奧林匹克比賽標準的身體。」</p>\r\n\r\n<p>運動會使腦細胞得到更多氧氣和養分，還能增加神經生長因子BDNF的濃度，幫助神經元生長。常運動的兒童和青少年，能運用更多的認知資源做作業，持續力較好。一項英國研究顯示，兒童在上課前做5分鐘基本運動如手臂畫圈擺動，學習動機及效率都會提升。</p>\r\n\r\n<p>麥迪納在辦公室放了一台跑步機，休息時不是喝咖啡而是走路，他甚至在跑步機上邊走路邊回電子郵件。也許你沒辦法像他做得這麼徹底，至少多利用午休時間散散步，幫助大腦新陳代謝順暢。在學習的空檔安排肢體活動，不但能紓解壓力，更可以活化身體狀態，不容易分心。</p>\r\n\r\n<p><strong>3.努力、好奇、放鬆有助創意</strong></p>\r\n\r\n<p>發 明紅光二極體（LED），擁有多項專利的發明家侯隆雅克（Nick Holonnyak），有天躺在浴缸裡泡著熱水澡，扭著捲髮想實驗時，覺得天花板的燈太亮了，讓他眼睛不舒服，想把光線調暗一點賓果！隔天他就開始研 究調光器的組合配件。靈光一閃並不是天才的專利，人人都有潛力變成創意人：</p>\r\n\r\n<div class=\"dpMain\" id=\"content\">\r\n<div class=\"cp\" id=\"cp\">\r\n<p>■充分準備與練習：創造力不是一步登天，牛頓看到蘋果落下時，發現了萬有引力定律，但他在頓悟之前，已孜孜不倦研究物理學，經常思考許多問題。</p>\r\n\r\n<p>「基礎要先打好，」曾志朗認為，就像打棒球，練習愈熟練，身體各部位協調愈好，執行系統愈快達成自動化，監控系統才有時間思考、調整，舉一反三，處理球場上各種突發狀況。</p>\r\n\r\n<p>「大腦每個單位時間的認知能量是有限制的，」曾志朗說，如果執行一般任務就佔去大部份資源，大腦就只會因循過去的做法，變不出新把戲。</p>\r\n\r\n<p>■強烈探索的欲望：當發現新鮮有趣的訊息時，前扣帶迴（ACC）會將情報傳到前額葉大腦皮質（LPFC），由相當於總司令的前額葉大腦皮質，決定這時該活化哪一種神經細胞作出回應。「靈光乍現」就經常發生在這個過程中。</p>\r\n\r\n<p>好奇心強、求知慾旺盛的人，前扣帶迴和前額葉皮質間的聯繫迴路強壯，因此能儲備豐富的資訊激發創意，反之事事習以為常，懶得一探究竟的人迴路便會弱化，自然沒有足夠的電力發光。</p>\r\n\r\n<p>「要發揮創造力，必須不斷對世界發出疑問，」茂木健一郎建議，例如「真的是這樣嗎？」「這樣就夠好了嗎？」「自己還有什麼不足之處？」持續這樣的思考習慣，「一定會出現『啊！就是這個』的答案。」</p>\r\n\r\n<p>■ 休息、放鬆讓好點子浮現：大腦持續處裡某個主題而過度使用時，會出現「饜足」的現象，「一直拚命想，神經系統反而被關住，想不出新東西，」曾志朗解釋，這 時候不能再鑽牛角尖，要暫時放下去做別的事，出去走走、睡一覺，釋放被關住的神經細胞重新連結整理，過一陣子再回來或隔天起床，往往就有新法。找出能單獨 放鬆、發想的場所也很重要，不管是浴室、計程車都好，「當大腦不會被太多不相關的情報干擾，好點子才容易浮現，」茂木健一郎提醒。</p>\r\n\r\n<div class=\"dpMain\" id=\"content\">\r\n<div class=\"cp\" id=\"cp\">\r\n<p><strong>4.三方法幫大腦專注</strong></p>\r\n\r\n<p>從小我們就被叮嚀上課要專心，不准偷看漫畫、傳紙條。但人的注意力原本就有極限，「大約過了10分鐘，人的注意力就會開始游離，」麥迪納博士指出。</p>\r\n\r\n<p>要幫助大腦集中精神，維持注意力，提高學習效果，可以試試：</p>\r\n\r\n<p>■分段落：不要貪心想把訊息一次囫圇吞棗，尤其對初次接觸的新知識，要有時間休息讓大腦消化。開會、簡報時如果不想看到台下昏沉打瞌睡，最好從基本的概念開始講解內容，循序漸進，效果會更好。</p>\r\n\r\n<p>■要專心、不要一心多用：邊吃飯邊聊天這種自動化作業，對大腦並非難事，但邊開車邊講手機這種雙方都需要注意力的任務，就很容易出錯。如果一個人的作業過程一直被打斷，不只花更多時間才能完成，錯誤率也會提高50％。</p>\r\n\r\n<p>■用情緒刺激當釣餌：大約每10分鐘左右，發現聽眾眼神渙散時，可以用和主題有關的故事或能引發情緒的事件，重新抓住他們的注意力。</p>\r\n\r\n<p><strong>5.理解、圖像，有助記憶力</strong></p>\r\n\r\n<p>英國音樂學者克萊夫是腦神經醫學上的知名病人：他因病失去記憶力，不但無法儲存新記憶，過去的記憶也被刪除一空。神奇的是，記憶只能維持幾秒鐘的他，仍能駕輕就熟演奏樂曲，保有個人的風格。</p>\r\n\r\n<p>人的記憶系統奧祕複雜，每個類型的記憶在大腦裡處理儲存的部位也不同，了解記憶系統特性，才能增加記憶壽命。</p>\r\n\r\n<div class=\"dpMain\" id=\"content\">\r\n<div class=\"cp\" id=\"cp\">\r\n<p>■分散比集中記得牢：例如一週後要考試，在一星期內10個不同的時段重複讀考試的內容，比起一口氣看10遍的效果更好。而需要記住的資訊，最好三不五時溫習一下，再加入新的相關資料一起思考，便不會學了新的卻忘了舊的。</p>\r\n\r\n<p>■搞清楚訊息的意義：不明就裡死背的知識很難被提取出來使用，愈了解學習主題的意義，多結合真實的經驗和具體例子，訊息會自動被儲存且持續較久。</p>\r\n\r\n<p>■善用圖片優勢效應：圖片的學習速度與記憶效果，比口語或文字更強。將需要記憶的內容視覺化、想像這些物體，或讓它們彼此產生互動關係（愈滑稽愈有用），會更容易回想起來。</p>\r\n\r\n<p>■多練習：研究證實，將學習到的資訊反覆輸出練習，更有助大腦迴路的定著。抱著參考書猛讀，不如大量解題；對銷售員來說，要熟悉產品的專業知識，比起猛背資料，多向顧客做簡報能更快上手。</p>\r\n\r\n<p><strong>6.睡得好睡得夠，才學得會</strong></p>\r\n\r\n<p>對身體肌肉來說，睡覺等於休息，但對大腦來說，睡眠時依然有許多任務要做。在快速眼動睡眠（佔睡眠週期80％），大腦裡的神經元送出各種電流訊號彼此交談，忙碌程度不下於清醒。睡眠會影響人習得和保持新技能的方式，睡眠被剝奪的人，創造力和決策能力都會變差。</p>\r\n\r\n<p>愈來愈多研究發現，睡眠對「記憶的整序和強固化」很重要。學習、訓練之後睡一覺，可以讓作業的表現進步。熬夜K書雖然能暫時應付考試，知識卻無法進入長期記憶庫儲存，很快忘光光。</p>\r\n\r\n<p><strong>如何利用睡眠的力量？專家建議：</strong></p>\r\n\r\n<p>■小睡片刻：人在下午的一段時間，會經驗短暫的昏昏欲睡，「午睡時區（nap zone）很重要，我們的大腦在這個時段工作效率不好，」麥迪納博士指出，休息個30分鐘，可以提高午後的認知表現。</p>\r\n\r\n<p>■了解自己的作息型態：睡8小時只是通則，每個人還是有個別差異，也會隨年齡而變化。了解自己睡多久感覺最好，依照自己的睡眠需求安排行程，效率會更好。</p>\r\n\r\n<p>■讓大腦在睡夢中複習：例如為期兩天的教育訓練課各有主題，講者可以先在第一天把全部內容大略介紹一遍，讓學員透過睡眠強化記憶，隔天再深入講解。</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', '{$now}',  '0000-00-00 00:00:00',  '1',  '{$uid}',  '', '', 3,  '8',  '0',  '0000-00-00 00:00:00',  '', 0),

  ('{$insert_id}',  '拼甄選vs.念指考的時間管理？把握1：1原則', '<p><span>時間管理３解方： １、學測考很好、甄選第一階段穩過，還是要認真上課。 ２、學測成績不上不下的人，可依1：1時間分配，同時準備甄選與指考。 ３、確定上不了目標校系者，自己規畫讀書進度，別過於在意模擬考成績。</span></p>\r\n\r\n<p><strong>台灣大學物理學系一年級彭玄同：</strong></p>\r\n\r\n<p>學測考很好、個人申請第一階段穩過的人，我覺得還是要認真上課，回家再做審查資料。假如連上課都在想甄選，萬一沒錄取，中間這段課業就落後了。</p>\r\n\r\n<p>而學測成績不上不下的人，可以依1：1的時間分配準備甄選。我當時的學測成績落在第一志願台灣大學物理學系邊緣，所以選擇跟緊高三課業，週末才準備審查資料。我告訴自己，做審查資料一定要很有效率，也幫自己心理建設，做好指考的準備。</p>\r\n\r\n<p><strong>準備甄選筆試，對指考也有幫助</strong></p>\r\n\r\n<p>平日我正常上課、晚自習，把重心放在學校課業和第二階段筆試上，就算第一階段沒過，準備筆試的過程也對指考有幫助。</p>\r\n\r\n<p>把握零碎時間念書很重要，我會做英文單字小卡，下課或等便當時拿來看。每天晚自習結束後會固定運動，讓身心放鬆，而且在12點以前睡覺，這樣第二天聽課才有精神。</p>\r\n\r\n<p>寒假時我就開始寫自傳，但開學後只有週末才做審查資料，而且從吸取同學經驗開始。例如要交「對物理百年來發展的心得」短文，我先請教同學寫的方向和脈絡，也請同學教我使用美編軟體；下筆寫自傳前我會先勾勒架構，而不是開電腦才開始想，這些都能讓自己有效率。</p>\r\n\r\n<p>個人申請第一階段放榜前，我只完成封面和自傳，心想排版與裝飾等通過後再衝刺。</p>\r\n\r\n<p>至於第三種確定學測成績上不了目標校系的情況，像我第一階段被台大物理系刷掉後就是如此。當時備選校系雖然通過，但我仍想拼第一志願，第二天就下定決心要考指考，不再猶豫。聽同學討論甄選難免心癢，但既然已決定，就要承受、不要想太多。</p>\r\n\r\n<p>準備指考要有自己的步調。我是學校教什麼就讀什麼，但會透過記事本規劃遠、近程讀書計畫，每天讀完就打勾。</p>\r\n\r\n<p>有自己的進度，模擬考就不必太在意成績；像我把模擬考當作一種檢視，看哪些科目需要加強、讀書進度需不需要調整。比較不拿手的科目不要逃避，為了練國文、英文作文的手感，我在指考前一個月，幾乎每週都寫3～4篇作文。</p>\r\n\r\n<p>除了念書，高三生還要面對自己究竟要念什麼校系、未來要做什麼的課題，念書的空檔一定要好好問自己。不要等到成績出來再想，思考時間太短很危險，容易做出衝動的決定。</p>\r\n',  '{$now}',  '0000-00-00 00:00:00',  '1',  '{$uid}',  '', '', 3,  '8',  '0',  '0000-00-00 00:00:00',  '', 0),

  ('{$insert_id}',  '我的孩子適合讀私校嗎？',  '<p><u><strong>四問題一行動，釐清核心需求</strong></u></p>\r\n\r\n<p>想讓孩子念私校嗎？</p>\r\n\r\n<p>在決定要不要讓孩子讀私校，或是選擇讀哪一所私校的當口，父母要先問問自己四個問題。</p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>問題一：</strong></span></p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>我為什麼要送孩子去私校？</strong></span></p>\r\n\r\n<p>解決雙薪家庭的安親問題？避免國中霸凌問題？追求別於體制內的課程設計？嚮往精實的英語教學？每個孩子讀私校的理由不同。</p>\r\n\r\n<p><strong>了解自己的問題及需求，是選校的第一步</strong>，有助於從多所私校中找尋適合的目標學校。但再怎麼熱門的私校，每年都還是有不適應的學生轉出來，因此要有心理準備的是：你也有可能為了解決簡單的問題，衍生出更多的複雜問題。</p>\r\n\r\n<p>三年前，劉小姐考慮上下班時間及方便接送，將孩子送至台北市區一所費用平民的私小。後來她發現，學校的學習方式非常填鴨，孩子從小一就在考試與背誦中度過每一天；段考前沒有下課，因為老師要幫忙孩子複習。</p>\r\n\r\n<p>更嚴重的是，學校董事會易主後，經營商業化，讓外面補習班在假日進學校開才藝課，招收外校學生。兩年前學校成立雙語班，師資和課程就直接引進美語補習班現成的。</p>\r\n\r\n<p>「我只考慮到時間能不能配合？接送方不方便？忽略了學校教學和教育方式，」劉小姐反省。</p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>問題二：</strong></span></p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>我們家的教育理念是什麼？</strong></span></p>\r\n\r\n<p>每個家庭都因著教育理念與教養路線的不同，對教育有不一樣的「想望」。因為孩子在學校的時間長，有時候選校不單純只是選擇學習樣態，更是在選擇家庭生活價值。</p>\r\n\r\n<div class=\"dpMain\" id=\"content\">\r\n<div class=\"cp\" id=\"cp\">\r\n<p>許多家長是擔心霸凌問題而將孩子往私校送，但是「家庭同質性高，每個家庭都 『供得起』，物質欲望成為理所當然，」劉小姐說，他兒子就讀的班級，每次學生生日，家長就買禮物和蛋糕送全班同學。她並不贊同這種做法，也沒有跟隨，「但 是當你選擇不跟著一起做，就要花很多時間和孩子溝通，想別的折衷方式。」</p>\r\n\r\n<p>或許父母可以想想，當孩子班上有一半以上的家長開進口車，你的是國產車時；當很多孩子在比他們家三棟房子分別坐落於哪些國家，你家還在為三十坪小屋付房貸時，會不會有壓力？</p>\r\n\r\n<p>與你價值不符的學校文化，會逼著你逐漸變成一個自己也不喜歡的、矛盾的父母。</p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>問題三：</strong></span></p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>孩子的特質適合嗎？</strong></span></p>\r\n\r\n<p>長期從事青少年及兒童諮商工作、芯福里情緒教育推廣協會理事長楊俐容指出，每個孩子適合的學校不同，就算是同一家庭的手足，都不見得能一體適用。</p>\r\n\r\n<p>她建議從孩子的學習態度觀察，若孩子對學習興趣高昂，勇於接受挑戰，學校給的壓力會轉為學習能量；反之，若孩子總是提不起勁學習、抗壓性低，想要藉著送到功課壓力大的學校試圖改變，反而適得其反，讓孩子更排斥學習。</p>\r\n\r\n<p>私校的學習量大、節奏快，每個學習都求速成績效，不是所有孩子都能適應。很多孩子不是學不會，只是需要慢一點的學習步調，或是開竅的時間晚一點。</p>\r\n\r\n<div class=\"cp\" id=\"cp\">\r\n<p>但是私校很難等待學習步調不同的孩子，可能透過更多的反覆練習與考試，逼孩子記起來。也有積極的私校會請父母幫孩子請家教、送孩子去補習，或是請他直接轉學。</p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>問題四：</strong></span></p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>有哪些學校可以選擇？</strong></span></p>\r\n\r\n<p>同樣是私校，卻有多元異質的風格：傳統要求升學的、貴族精英的、新興訴求國際雙語的、宗教立學的、另類理念的。即使同樣是佛教學校，花蓮慈濟中學、南投普台中學以及雲林福智中學也有截然不同的氛圍。</p>\r\n\r\n<p>家長在選擇之前，需認清自己要的是什麼，才可能在考量學校風格、個人需求、家庭價值觀、交通接送等因素後，圈出想要的目標學校。</p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>必要行動：</strong></span></p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>親自到學校參觀了解</strong></span></p>\r\n\r\n<p>然而究竟要不要讓孩子去讀，還是要先去學校看過再決定。</p>\r\n\r\n<p>考慮的過程不宜太過倉促，建議最好要有三個月以上的時間觀察目標學校，去聽招生說明會、打電話跟學校聯繫參觀，並和家人討論。</p>\r\n\r\n<p>如果選的是國中，請務必跟孩子討論，對青少年來說，要不要讀私中？念什麼風格的私中？有時候家長想的無法算數，要看孩子的意願與接受度。</p>\r\n\r\n<p>從「孩子的學習特質」著手，加權父母最重視的擇校因素，並搭配孩子的就讀意願，比較容易找出一所親子皆大歡喜的學校，也比較可能回答「我的孩子適合讀私校嗎？」這個大哉問。</p>\r\n</div>\r\n\r\n<p>最後，無論<strong>要不要念私校？念哪一所私校？「父母只是去選擇面對不同的問題而已，」奧林文化總編輯謝淑美提醒</strong>，當孩子無法適應學校生活時，父母都應具備「解決孩子不同問題」的勇氣與智慧。</p>\r\n</div>\r\n</div>\r\n', '{$now}',  '0000-00-00 00:00:00',  '1',  '{$uid}',  '', '', 2,  '6',  '0',  '0000-00-00 00:00:00',  '', 0),

  ('{$insert_id}',  '爸媽必懂！聯考、會考有何不同？',  '<p>會考、基測與聯考，3種考試其實都各自反映時代背景和人才需求的價值觀轉變。3種考試最大的不同有：</p>\r\n\r\n<p><span style=\"color: #ff0000\"><strong>一、計分「區別性」愈來愈低。</strong></span>會考只分精熟、基礎、待加強3個等第，基測總分412分，聯考總分700分。</p>\r\n\r\n<p>聯考各科總分不一，國文（含作文）200分、自然和社會各140分、數學120分、英語100分，教師教學與學生學習，有主要科目與次要科目的區分。基測與會考則是各科分數等值，不偏重任何一科目。</p>\r\n\r\n<p>會 考、基測與聯考考科相同，有國文（加考作文）、英語、數學、社會、自然5科。不過會考採「標準參照」模式，學生與教育部事先制訂的「學力標準」比較，分為 精熟、基礎或待加強3等第。基測、聯考則採「常模參照」模式，學生彼此之間做比較，分數高低代表自己在所有學生間的位置。</p>\r\n\r\n<p><span style=\"color: #ff0000\"><strong>二、要拿到頂級分，愈來愈容易。</strong></span>會考難易適中、基測中間偏易、聯考難度較高。</p>\r\n\r\n<p>會考雖然難度比基測高，但是平均會有10％～20％的學生達到精熟級。以往聯考總分700分，鮮少有考生能考滿分，建中、北一女錄取分數略高於600分；基測時代滿分412分，每年都有數10位滿分考生，建中、北一女錄取分數約400分。</p>\r\n\r\n<p>考題的難度和出題方式有關。聯考「入闈」命題，承辦學校邀集高中教師、大學教授「閉關」兩週設計考題。每年的考題難易變化就像坐雲霄飛車一樣。基測、會考則是標準化命題，事先蒐集考題，再從題庫選取考題，得以控制每年考題的難易度。</p>\r\n\r\n<p>聯考是為前端學生做區隔，考題刁鑽，學生的考試壓力非常重；到了基測，強調「基本學力」測驗，不特別篩選頂尖學生；至於會考難度比基測稍難，則是為了將3等第中的精熟與基礎做出區隔，但學生不需拚滿分，一份考卷答對8成以上的題目就可拿到「精熟」等級，壓力還是比基測小。</p>\r\n\r\n<p><span style=\"color: #ff0000\"><strong>三、從極端升學主義到檢測學力。</strong></span>聯考、基測是升學的主要參考依據，會考則是「學力監控」機制，及部分的升學依據─做為免試入學超額比序項目，佔比序總分的1/3。</p>\r\n\r\n<p>以前聯考是唯一的升學依據，為了篩選精英，考題難，前端學生壓力大，中後端學生學習勉強或早早放棄。</p>\r\n\r\n<p>基測強調「基本學力」，以多數學生能力範圍來設計考題。到了會考時代，更重視「學力監控」，以會考做為檢測工具，了解學生的整體學力。</p>\r\n\r\n<p>從聯考、基測到會考，大型考試逐漸從「極端升學主義」走向「檢測學生學力」。雖仍有升學壓力，不過可見的是：老師的教與學生的學，都不能再與以往相同了。（口述│台師大心測中心副主任曾芬蘭；採訪整理│楊鎮宇）</p>\r\n',  '{$now}',  '0000-00-00 00:00:00',  '1',  '{$uid}',  '', '', 2,  '6',  '0',  '0000-00-00 00:00:00',  '', 0),

  ('{$insert_id}',  '楊照：了解自我標準，是上國中最重要的事',  '<div class=\"dpMain\" id=\"content\">\r\n<div class=\"cp\" id=\"cp\">\r\n<p>孩子要上國中了，父母需要做什麼準備嗎？</p>\r\n\r\n<p>這其實牽涉到在他們小的時候你有多少的準備，而不是等到他要上國中了，你才來準備。</p>\r\n\r\n<p>我覺得給國中生最重要的準備，是他到底了不了解他的自我標準是什麼。我們的國中最糟糕、最糟糕的一件事是，它有一個非常強大的外在標準。</p>\r\n\r\n<p>我 們都很擔心，我的小孩萬一不符合這個外在標準的時候，怎麼辦？這是沒辦法解決的，因為這個外在標準不是為了這個小孩特別去量身訂做的，它是要求所有的小孩 都得這樣。如果問的是這種問題，「如何去符合外在的標準？」那是不可能解決的，因為只有一種方法，就是強迫小孩去因應外在的標準，怎麼可能不緊張？</p>\r\n\r\n<p>所以，我的選擇就是在孩子很小的時候，就去幫助她清楚的知道自己的標準是什麼。這樣她會至少擁有一些力量，對於外在的標準，她會明白沒有必要一定要遵守；也清楚哪些東西是自己主動要去追求的，哪些是不用去迎合外在標準的，孩子可以自信的去分配。</p>\r\n\r\n<p>一 個小孩最怕的是，因為外在的標準而使得他變得沒有自信，因為和外在標準相比，他可能都不能符合。唯一的解決方式，就是在這個外在標準之外，孩子要能真的清 楚知道，他自己是什麼。他也可以自己選擇要用什麼樣的方式，來處理外在標準，以及要處理到什麼程度。雖然同時間，他可能會面臨到老師和同學給他的壓力。</p>\r\n\r\n<div class=\"cp\" id=\"cp\">\r\n<p>我們要讓這樣的小孩在這樣的教育體制裡面還能夠成長，就是要教他挺得住。</p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>教小孩「挺得住」</strong></span></p>\r\n\r\n<p>我 在雲門舞蹈教室看到一個小孩，他到了國中三年級，還是堅持到雲門上課。學校老師打電話給雲門，要他們不要教這個小孩，因為他要考試了，不應該再去上武術 課。這小孩就說：「為什麼我要把所有的時間放在課業上，我就是準備花這麼多時間在課業上，其他的時間我要做別的事。我花了這些時間在課業上，能夠考什麼樣 的成績，這就是我的成績。」</p>\r\n\r\n<p>我覺得這就是一個好棒的小孩！我希望有更多的小孩，他有這樣的空間去做這樣的決定。</p>\r\n\r\n<p>所以「挺得住」的意思，就是你知道你自己想要的，壓力來的時候，你還是做你自己。</p>\r\n\r\n<p>要 了解孩子究竟是任性，還是真的對一件事情能堅持到底，這就要看他在更小的時候，你到底做了多少準備。孩子覺得重要的事情，是不是會讓爸爸媽媽知道，還是爸 媽只是一直告訴他，你希望他們怎麼做。你有沒有去傾聽孩子覺得重要的事情？只有這樣，等到他長大之後，要去做某些事情的時候，父母才會清楚，這到底是他的 任性，還是真的是他想要追求的東西。</p>\r\n\r\n<p>父母不能等到青少年時期，孩子要自己做決定的時候，卻沒辦法判斷，他到底真的要做什麼。</p>\r\n\r\n<p>我也知道，女兒上國中了，我必須開始放手，可是我還滿放心的，因為這幾年我做得夠多，互動很多。我也滿有信心的是，當我女兒有重要的事，她會告訴我。我們不用一直拉著她的手告訴她，這些事情你要這樣做、那些事情你要這樣做，我們可以不用擔心、害怕。</p>\r\n</div>\r\n</div>\r\n</div>\r\n',   '{$now}',  '0000-00-00 00:00:00',  '1',  '{$uid}',  '', '', 3,  '6',  '0',  '0000-00-00 00:00:00',  '', 0),

  ('{$insert_id}',  '翻轉教育，必須聽見學生',  '<div class=\"dpMain\" id=\"content\">\r\n<div class=\"cp\" id=\"cp\">\r\n<p>《教出最聰明的孩子：向腦力強國學習教育之道》作者、美國《時代》雜誌調查記 者雷普利（Amanda Ripley），在非營利組織「EmersonCollective」網站上發文，她觀察到去年底，短短一星期內，美國就有超過400則教育類新聞，每則 新聞的採訪對象至少會有1名大人，但只有1/5的報導含有學生的意見，而這些意見，通常也不過是短短一兩句「裝飾結尾」的引言，或呼應成人已說過的話。</p>\r\n\r\n<p>儘管上學的是小孩，但決定教育的一切卻是成人，在這場翻轉教育的熱浪中，與這場革命最切身的學生，卻持續在教育方向的辯論中缺席或保持沉默。根據美國非營利組織QISA對5萬8千名學生做的調查，超過半數的美國高中生，不相信自己可以對學校的決策提出意見、產生影響。</p>\r\n\r\n<p>「多 數記者和政策制定者看不到與年輕人對談的價值，因為在他們心裡，學生不是專家，」即將出版《收回學習的自由》（Reclaiming Our Freedom to Learn）、年僅18歲就撼動美國教育體制的年輕人戈游（Nikhil Goyal）解讀成人對年輕人意見的「不感興趣」。</p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>沒有學生的意見，教改是否很難成功？</strong></span></p>\r\n\r\n<p>如 果我們真心的問孩子，他們理想中的教育是什麼，他們又會告訴我們什麼？根據「The Met project」針對美國7個城市、3000間教室的研究顯示，只要問題設計得好，學生其實比培訓過的觀課老師更能辨識懂得教學的「好老師」。畢竟學生每 天都要到學校上課，與這些老師長期相處，不像觀課老師幾個月「空降一次」半小時後就離開；況且學生人數也比觀課老師的人數多得多。若學生的意見也能和觀課 老師的意見一併納入考量，那樣的教師評鑑或許更趨向公平、更有意義。</p>\r\n\r\n<p>根據經濟合作暨發展組織（OECD）今年的公布，會定期請學生提供書面反饋的教育體制，多半來自社會較「公平」、貧窮問題相對不那麼嚴重的國家，譬 如紐西蘭、荷蘭、愛沙尼亞等國，有8成的學生在這種重視學生意見的學校就學；反觀美國，不到6成的學生就讀重視學生反饋的學校。</p>\r\n\r\n<p>雷普利觀 察，雖然學生可能不像大人顧慮的那麼周全，但他們也比成人更能誠實面對自己，比起曇花一現的「快閃政策」，他們更在意的是學校、家庭、個人環環相扣、開展 的人生，而不只局限於卡住成人的那些政策和規條細節。雷普利反思，我們大人花這麼多資源和力氣在提升學生學習的注意力、學習動機，無所不用其極的使用賄絡 或懲罰的手段，又或者是砸重金在數位設備、師資培訓上，為的只是要讓學生「在意學習」。</p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>答案會不會比我們想得還要簡單？</strong></span></p>\r\n\r\n<p>若 我們也把翻轉教育的難題分給學生，讓他們一起思考怎麼樣才能把學校變得更吸引人來學習？《芝加哥論壇報》（The Chicago Tribune）報導的一項大型研究或許能提供一點亮光。這項調查徵詢了74萬名美國國高中生的意見，有近半數的伊利諾州學生表示，上主要科目時老師不曾 或很少問他們具挑戰性的問題。調查中4成的學生表示很少寫到具挑戰性的試題；另外，超過半數的國高中生覺得走在校園裡、或上下學的路途是「不安全的」。顯 然「收到學習的任務不夠有挑戰」與「校園安全問題」是多數學生的學習障礙。</p>\r\n\r\n<p>看見答案不難，但決策者否聽取、接受，似乎更是關鍵。</p>\r\n</div>\r\n</div>\r\n', '{$now}',  '0000-00-00 00:00:00',  '1',  '{$uid}',  '', '', 2,  '6',  '0',  '0000-00-00 00:00:00',  '', 0),

  ('{$insert_id}',  '會考時代，學生非閱讀不可！',  '<div class=\"dpMain\" id=\"content\">\r\n<div class=\"cp\" id=\"cp\">\r\n<p>明年十二年國教正式上路後，基測轉型成會考。在未來幾年中，會考成績仍將是決定超額比序的重要關鍵。</p>\r\n\r\n<p>三月底剛剛考完的會考試測，題型和基測類似，但也預告著轉變，從會考試測命題的趨勢來看，未來中學生的學習策略應該要有以下的轉變。</p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>1. 閱讀、閱讀、閱讀！</strong></span></p>\r\n\r\n<p>《親 子天下》在四月初會考試測一結束，採訪每一科的資深國中老師分析本次試測題目的特色。聽到老師們不斷重複的共同關鍵字就是「閱讀力」。會考難度比基測難， 最顯而易見的差異之一就是題幹加長。這一次的國文科出了一篇一千一百字長的羅蘭散文。學生必須對於閱讀長文不恐懼，且能在很短的時間內抓到重點。台北市教 育局局長丁亞雯也說：「看到會考試測的題目，名師的結論都是：『國中生非閱讀不可！』」</p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>2. 記憶少，思考和理解才是關鍵</strong></span></p>\r\n\r\n<p>綜觀專家的分析「會考沒有看一眼」就能答的題目。譬如，國文科的閱讀測驗，不考可以直接在文本中找到答案的題目。考的是學生能否和作者「對話」，也就是，從文本推敲寫作動機和作者想說沒說的言外之意。</p>\r\n\r\n<p>數 學科這一次加考的非選擇題更是必須從提供的題目條件中，分析判斷後，提出支持性理由，才能拿到滿分。第一次會考試測的非選擇題考了兩題，在全體考生中平均 每一題能夠拿到滿分三分的比率都不到六％。兩題各拿零分的比率更是高得驚人，分別是七七．六％和八七．七％。雖然很難預估，這次參加試測的考生是真的不會 寫？還是懶得寫？但是，可以看到數學非選擇題，這種重視思考過程的學習，會是未來必須加強的方向。</p>\r\n\r\n<div class=\"dpMain\" id=\"content\">\r\n<div class=\"cp\" id=\"cp\">\r\n<p><span style=\"color: #ff6600\"><strong>3. 加強整合和跨科學習的能力</strong></span></p>\r\n\r\n<p>這次在社會科當中，有好幾題是跨科的題目。譬如，社會科第四題出現《天工開物》的書名，這是歷史科，但是用這個題目要測驗的是關於台灣國家公園的特色，是地理科的範圍。第四十九題，則以九世紀海上絲路為題（歷史科），來測驗盛行風向（地理科）。</p>\r\n\r\n<p>自然科和數學科則考很多整合了兩個觀念以上的題目。打破學習中科目和單元的疆界。</p>\r\n\r\n<p>學生不需要練習太多繁複的計算和花時間背誦，但是學習時必須非常專心，徹底弄懂基礎概念。</p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>4. 重視生活經驗</strong></span></p>\r\n\r\n<p>會考試測的題目和生活連結的程度很高。國文科的閱讀測驗還考了金庸作品的序文。社會科更是多題取材自生活，時事的題目包含了民法修訂和高齡化社會等重大議題。</p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>5. 英語的英聽簡單但雙峰現象明顯</strong></span></p>\r\n\r\n<p>同 樣第一次出現的英聽題目，這一次總共考了二十題，但是全體考生平均答對十六題。心測中心分析英聽的題目對一般考生並不困難，只要依據課本正常學習是容易拿 分。但是英語科的基礎級考生比率是全科中最低五五．六％，最高是社會科六八．二％。英語科考生待加強比率最高，精熟的比率也偏高，有明顯的雙峰現象。</p>\r\n\r\n<p><span style=\"color: #ff6600\"><strong>6. 作文不計分，卻是比序關鍵</strong></span></p>\r\n\r\n<p>作 文雖然在會考中不計分，但是好幾個就學區在比序碰到同分時，作文卻是比序的最重要關鍵。這一次試測，作文能夠拿到六級分的只有稀少的二．二％比率。考生普 遍集中在四級分的五三．三％，和五級分的二一．六％。因此，若是在競爭激烈的學區，當同分時，作文是高分群一定有絕對的優勢。</p>\r\n\r\n<p>對於關心十二年國教和會考趨勢的父母來說，改變是混亂和不安的。但是，掌握新的趨勢、用對的觀念陪伴孩子，將有可能事半功倍。</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', '{$now}',  '0000-00-00 00:00:00',  '1',  '{$uid}',  '', '', 2,  '8',  '0',  '0000-00-00 00:00:00',  '', 0);
  ";
    $xoopsDB->queryF($sql) or die($sql);

    $sql            = "select max(sort) from `" . $xoopsDB->prefix("tad_news_cate") . "` where not_news='1'";
    $result         = $xoopsDB->query($sql);
    list($max_sort) = $xoopsDB->fetchRow($result);

    $max_sort++;
    $sql = "INSERT INTO `" . $xoopsDB->prefix("tad_news_cate") . "`
  (`of_ncsn`, `nc_title`, `enable_group`, `enable_post_group`, `sort`, `cate_pic`, `not_news`, `setup`)
  VALUES
  (0,'學校簡介', '', '1', '{$max_sort}', '', '1','title=1;tool=0;comm=0;nav=1')";
    $xoopsDB->queryF($sql) or die($sql);
    $insert_id = $xoopsDB->getInsertId();

    $sql = "INSERT INTO `" . $xoopsDB->prefix("tad_news") . "` (`ncsn`, `news_title`, `news_content`, `start_day`, `end_day`, `enable`, `uid`, `passwd`, `enable_group`, `counter`, `prefix_tag`, `always_top`, `always_top_date`, `have_read_group`, `page_sort`) VALUES
  ('{$insert_id}', '學校沿革', '<p>學校沿革內容製作中～</p>', '{$now}', '0000-00-00 00:00:00', '1', '{$uid}', '', '', 9, '', '0', '0000-00-00 00:00:00', '', 1),
  ('{$insert_id}', '本校概況', '<p>本校概況內容製作中～</p>', '{$now}', '0000-00-00 00:00:00', '1', '{$uid}', '', '', 5, '', '0', '0000-00-00 00:00:00', '', 2),
  ('{$insert_id}', '歷任校長', '<p>歷任校長內容製作中</p>', '{$now}', '0000-00-00 00:00:00', '1', '{$uid}', '', '', 5, '', '0', '0000-00-00 00:00:00', '', 3),
  ('{$insert_id}', '學校位置圖', '<p>學校位置圖內容製作中～</p>', '{$now}', '0000-00-00 00:00:00', '1', '{$uid}', '', '', 2, '', '0', '0000-00-00 00:00:00', '', 4)
   ";
    $xoopsDB->queryF($sql) or web_error($sql);

    $max_sort++;
    $sql = "INSERT INTO `" . $xoopsDB->prefix("tad_news_cate") . "`
  (`of_ncsn`, `nc_title`, `enable_group`, `enable_post_group`, `sort`, `cate_pic`, `not_news`, `setup`)
  VALUES
  ('{$insert_id}','行政單位', '', '1', '{$max_sort}', '', '1','title=1;tool=0;comm=0;nav=1')";
    $xoopsDB->queryF($sql) or die($sql);
    $insert_id = $xoopsDB->getInsertId();

    $sql    = "select `groupid`,`name` from " . $xoopsDB->prefix("groups") . " where groupid > 3";
    $result = $xoopsDB->query($sql) or web_error($sql);

    $i = 1;
    while (list($groupid, $name) = $xoopsDB->fetchRow($result)) {
        $sql = "INSERT INTO `" . $xoopsDB->prefix("tad_news") . "` (`ncsn`, `news_title`, `news_content`, `start_day`, `end_day`, `enable`, `uid`, `passwd`, `enable_group`, `counter`, `prefix_tag`, `always_top`, `always_top_date`, `have_read_group`, `page_sort`) VALUES
    ('{$insert_id}', '{$name}', '<p>{$name}內容製作中～</p>', '{$now}', '0000-00-00 00:00:00', '1', '{$uid}', '', '', 2, '', '0', '0000-00-00 00:00:00', '', $i)
     ";
        $xoopsDB->queryF($sql) or die($sql);
        $i++;
    }
}