-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 9 月 21 日 17:23
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `final_01`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `candidates`
--

CREATE TABLE `candidates` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `kana` varchar(64) NOT NULL,
  `birthdate` varchar(12) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `district` varchar(64) NOT NULL,
  `period` varchar(64) NOT NULL,
  `link` varchar(128) NOT NULL,
  `principle1` varchar(80) NOT NULL,
  `principle2` varchar(80) NOT NULL,
  `principle3` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `kana`, `birthdate`, `gender`, `district`, `period`, `link`, `principle1`, `principle2`, `principle3`) VALUES
(2, '池田　謙次', 'いけだ　けんじ', '1956/1/1', '男性', '苫小牧市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', 'いつまでも暮らしたい、誰もが暮らしたくなる、 自信と誇り・夢と希望に満ちた苫小牧市', '保育料・給食費無償化！義務教育課程の教科書・制服の現物支給を実現', '運転免許更新制度の見直しと高齢者バス乗り放題券の発行。安心安全なまちづくり。'),
(3, '山田 太郎', 'やまだ たろう', '1980/3/15', '男性', '東京都議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '子どもたちが安心して育てる街へ', '交通費支援を拡充', '老朽化したインフラを更新'),
(4, '佐藤 次郎', 'さとう じろう', '1965/11/10', '男性', '大阪市議会', '令和４年６月～令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '防災を強化！何にも負けない強い町', '商店街の活性化を図る！新規出店に補助金がぼがぼ', '高齢者施設の充実。ケアワーカーの給料を倍にします'),
(5, '鈴木 一郎', 'すずき　いちろう', '1972/5/23', '男性', '札幌市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '未来の交通、水素電車を市内に張り巡らせます', '環境保護を推進。たったひとつの地球を守ることができるのは私たち一人一人です', '観光業の支援をします。老朽化した建物の再建に補助金だします'),
(6, '田中 花子', 'たなか　はなこ', '1990/9/25', '女性', '京都市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '女性が活躍できる社会へ！女性の平均年収倍増計画実施します', '育児支援を充実。子育てサポートタクシーの無償化実現します！', '観光業の再興！ウェルカムベビーの宿を増やして観光客を呼び込みます'),
(7, '高橋 美穂', 'たかはし　みほ', '1985/4/12', '女性', '横浜市議会', '令和４年６月～令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '子どもの教育を最優先。イエナプラン教育を全学校に導入します！', '都市の緑化を推進！横浜グリーン化運動', '災害対策強化。備蓄米を３年分確保します！'),
(8, '加藤 千秋', 'かとう　ちあき', '1975/7/7', '女性', '福岡市議会', '令和４年６月～令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '町内会復活！地域福祉がすべての人を支えるまちづくり', '防犯カメラの設置拡大で犯罪冤罪ゼロ都市へ！！！', '医療制度見直しで財政再建！無駄な受診はさせません、無駄な薬は処方させません！'),
(9, '山田 太郎', 'やまだ たろう', '1980-05-15', '男性', '横浜市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '持続可能な都市開発と環境保護の両立を目指す', '子育て支援の充実と教育環境の改善', '高齢者に優しい街づくりと地域コミュニティの強化'),
(10, '佐藤 美香', 'さとう みか', '1988-11-03', '女性', '札幌市議会', '令和４年６月〜令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '女性の社会進出支援と男女平等の推進', '地域経済の活性化と雇用創出', '災害に強いまちづくりと防災対策の強化'),
(11, '鈴木 健一', 'すずき けんいち', '1975-08-22', '男性', '名古屋市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '公共交通機関の整備と交通渋滞の解消', '中小企業支援と地元産業の振興', '市民参加型の行政運営と情報公開の推進'),
(12, '田中 順子', 'たなか じゅんこ', '1992-03-07', '女性', '福岡市議会', '令和４年６月〜令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '若者の政治参加促進と市政の活性化', '文化芸術の振興と観光産業の発展', '多様性を尊重する共生社会の実現'),
(13, '高橋 誠', 'たかはし まこと', '1968-12-10', '男性', '京都市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '歴史的景観の保護と都市開発の調和', '大学との連携強化と若者の定住促進', '環境に配慮した持続可能なまちづくり'),
(14, '渡辺 恵子', 'わたなべ けいこ', '1983-07-19', '女性', '仙台市議会', '令和４年６月〜令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '子育て世代への支援強化と少子化対策', '地域医療の充実と健康寿命の延伸', '再生可能エネルギーの推進と省エネ対策'),
(15, '伊藤 隆志', 'いとう たかし', '1972-02-28', '男性', '神戸市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '港湾都市としての特性を活かした経済振興', '防災・減災対策の強化と安全なまちづくり', '教育環境の整備と生涯学習の推進'),
(16, '小林 真由美', 'こばやし まゆみ', '1990-09-05', '女性', '広島市議会', '令和４年６月〜令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '平和教育の推進と国際交流の活性化', '地域コミュニティの再生と高齢者支援', 'スポーツ振興とヘルスケア産業の育成'),
(17, '加藤 浩二', 'かとう こうじ', '1979-06-12', '男性', 'さいたま市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '都市型農業の振興と地産地消の推進', 'ワーク・ライフ・バランスの推進', 'ICT活用による行政サービスの効率化'),
(18, '吉田 美智子', 'よしだ みちこ', '1986-04-30', '女性', '千葉市議会', '令和４年６月〜令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '女性の活躍推進と子育て支援の充実', '環境保護と持続可能な都市開発の両立', '多文化共生社会の実現と国際化推進'),
(19, '中村 健太', 'なかむら けんた', '1984-10-08', '男性', '静岡市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '地域産業の活性化と雇用創出', '防災対策の強化と安全なまちづくり', '教育環境の整備と人材育成の推進'),
(20, '木村 由美', 'きむら ゆみ', '1977-01-23', '女性', '新潟市議会', '令和４年６月〜令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '農業振興と食の安全確保', '子育て支援と女性の社会進出促進', '高齢者福祉の充実と地域包括ケアの推進'),
(21, '斎藤 浩一', 'さいとう こういち', '1970-11-15', '男性', '熊本市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '震災復興の加速と防災体制の強化', '観光産業の振興と地域経済の活性化', '環境保護と再生可能エネルギーの推進'),
(22, '松本 理恵', 'まつもと りえ', '1989-08-07', '女性', '岡山市議会', '令和４年６月〜令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '若者の政治参加促進と市政の活性化', '文化芸術の振興とまちの魅力向上', '子育て支援と教育環境の充実'),
(23, '井上 正樹', 'いのうえ まさき', '1976-03-18', '男性', '大阪市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '大阪の経済再生と雇用創出', '都市インフラの整備と住環境の改善', '多様性を尊重する共生社会の実現'),
(24, '山本 明美', 'やまもと あけみ', '1982-12-01', '女性', '金沢市議会', '令和４年６月〜令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '伝統文化の保護と観光産業の振興', '子育て世代への支援強化', '高齢者が活躍できる社会づくり'),
(25, '藤田 孝司', 'ふじた たかし', '1973-07-09', '男性', '福島市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '復興の加速と安全・安心なまちづくり', '地域産業の活性化と雇用の創出', '再生可能エネルギーの推進'),
(26, '中島 優子', 'なかじま ゆうこ', '1987-05-25', '女性', '長崎市議会', '令和４年６月〜令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '観光産業の振興と地域経済の活性化', '子育て支援と教育環境の充実', '高齢者福祉の充実と地域包括ケアの推進'),
(27, '岡田 信一', 'おかだ しんいち', '1971-09-14', '男性', '浜松市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '地域産業の活性化とイノベーション推進', '子育て支援と教育環境の充実', '高齢者が活躍できる社会づくり'),
(28, '林 美穂', 'はやし みほ', '1985-02-11', '女性', '大津市議会', '令和４年６月〜令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '湖岸環境の保護と観光振興の両立', '子育て世代への支援強化', '地域コミュニティの活性化'),
(29, '村田 洋介', 'むらた ようすけ', '1978-12-03', '男性', '那覇市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '観光産業の振興と地域経済の活性化', '伝統文化の保護と継承', '防災・減災対策の強化'),
(30, '石川 真理子', 'いしかわ まりこ', '1993-07-20', '女性', '鹿児島市議会', '令和４年６月〜令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '若者の政治参加促進と市政の活性化', '環境保護と持続可能な発展の両立', '地域医療の充実と健康寿命の延伸'),
(31, '森 健太郎', 'もり けんたろう', '1974-05-08', '男性', '仙台市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '震災復興の加速と防災体制の強化', '地域産業の活性化と雇用創出', '子育て支援と教育環境の充実'),
(32, '橋本 さやか', 'はしもと さやか', '1988-10-17', '女性', '京都市議会', '令和４年６月〜令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '歴史的景観の保護と観光振興の両立', '若者の定住促進と雇用創出', '環境保護と持続可能な都市開発'),
(33, '野田 智也', 'のだ ともや', '1981-03-29', '男性', '神戸市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '港湾都市としての経済振興', '防災・減災対策の強化', '教育環境の整備と人材育成'),
(34, '竹内 美咲', 'たけうち みさき', '1990-01-05', '女性', '札幌市議会', '令和４年６月〜令和５年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '冬季スポーツの振興と観光促進', '子育て支援と教育環境の充実', '環境保護と再生可能エネルギーの推進'),
(35, '菊地 浩二', 'きくち こうじ', '1969-11-22', '男性', '福岡市議会', '令和５年６月～令和６年５月', 'https://www.city.tomakomai.hokkaido.jp/gikai/shokai/giinmeibo.html', '地域経済の活性化と雇用創出', '高齢者福祉の充実と地域包括ケア', '都市インフラの整備と住環境の改善');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
