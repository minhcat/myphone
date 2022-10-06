<?php

namespace App\Helpers;

class Common
{
    private static $loremText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tanti autem aderant vesicae et torminum morbi, ut nihil ad eorum magnitudinem posset accedere. Que Manilium, ab iisque M. Zenonis est, inquam, hoc Stoici. Callipho ad virtutem nihil adiunxit nisi voluptatem, Diodorus vacuitatem doloris. Mihi, inquam, qui te id ipsum rogavi? Tum ille: Ain tandem? Quae cum dixisset paulumque institisset, Quid est? Quae qui non vident, nihil umquam magnum ac cognitione dignum amaverunt. Sed tempus est, si videtur, et recta quidem ad me. Quod ea non occurrentia fingunt, vincunt Aristonem; Vidit Homerus probari fabulam non posse, si cantiunculis tantus irretitus vir teneretur; Cuius ad naturam apta ratio vera illa et summa lex a philosophis dicitur. Dicet pro me ipsa virtus nec dubitabit isti vestro beato M. Quod quidem iam fit etiam in Academia. Quae cum dixisset paulumque institisset, Quid est? Duo Reges: constructio interrete. Sumenda potius quam expetenda. Primum cur ista res digna odio est, nisi quod est turpis? Quid enim possumus hoc agere divinius? At miser, si in flagitiosa et vitiosa vita afflueret voluptatibus. Quod si ita se habeat, non possit beatam praestare vitam sapientia. Quamquam ab iis philosophiam et omnes ingenuas disciplinas habemus; Sed tamen enitar et, si minus multa mihi occurrent, non fugiam ista popularia. Hoc non est positum in nostra actione. Primum in nostrane potestate est, quid meminerimus? Audeo dicere, inquit. Cur post Tarentum ad Archytam? Ita prorsus, inquam; Quae quidem vel cum periculo est quaerenda vobis; Quis tibi ergo istud dabit praeter Pyrrhonem, Aristonem eorumve similes, quos tu non probas? Materiam vero rerum et copiam apud hos exilem, apud illos uberrimam reperiemus. Non enim ipsa genuit hominem, sed accepit a natura inchoatum. ';

    /**
     * Convert name to slug
     * 
     * @param string name
     * @return string slug
     */
    public static function convertNameToSlug(string $name) : string
    {
        $name = strtolower($name);
        $nameArraySplit = explode(" ", $name);
        return implode("-", $nameArraySplit);
    }

    /**
     * Genarate random text
     *
     * @param int length
     * @return string text
     */
    public static function lorem(int $length) : string
    {
        $result = substr(self::$loremText, 0, $length);
        $result = trim($result);
        $endText = substr($result, -1);
        return $endText === '.' ? $result : $result . '.';
    }

    /**
     * Genarate format date
     *
     * @param void
     * @return string formatDate
     */
    public static function formatDate() : string
    {
        return 'H:i:s d-m-Y';
    }

    /**
     * Descrease String
     *
     * @param string $string
     * @return string
     */
    public static function shortString($string, $number)
    {
        return substr($string, 0, $number) . '...';
    }
}