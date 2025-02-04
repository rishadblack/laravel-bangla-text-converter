<?php
namespace Nanopkg\BanglaTextConverter\BijoyToUnicode;

/**
 * CharacterMap
 *
 * @author IQBAL HASAN <iqbalhasan.dev@gmail.com>
 *
 * @link https://iqbalhasan.dev Author Homepage
 *
 * @license LICENSE The MIT License
 */
class CharacterMap
{
    /**
     * Get Letter replacement map as an array
     * Avro => Bijoy format
     *
     * @return array
     */
    public static function getLetterCharMap()
    {
        return [
            'M\\xad' => 'গ্ল',
            'c\\xad' => 'প্ল',
            'e\\xad' => 'ব্ল',
            'j\\xad' => 'ল্ল',
            'k\\xad' => 'শ্ল',
            'n\\xad' => 'হ্ল',
            '¯c&j' => 'স্প্‌ল',
            '‡e©' => 'র্বে',
            'š—¨©' => 'ন্ত্র্য',
            'š—¡' => 'ন্ত্ব',
            'M¨©' => 'র্গ্য',
            'e¨©' => 'র্ব্য',
            '_¨©' => 'র্থ্য',
            'R¨©' => 'র্জ্য',
            'P¨©' => 'র্চ্য',
            'N¨©' => 'র্ঘ্য',
            'K¨©' => 'র্ক্য',
            '•Nª' => 'ঙ্ঘ্র',
            'Mœ¨' => 'গ্ন্য',
            'M&Y' => 'গ্‌ণ',
            'k¨©' => 'র্শ্য',
            'O&³' => 'ঙ্‌ক্ত',
            'Mªy' => 'গ্রু',
            'Y¨©' => 'র্ণ্য',
            '›Uª' => 'ন্ট্র',
            '›`¨' => 'ন্দ্য',
            '›`ª' => 'ন্দ্র',
            'š—¨' => 'ন্ত্য',
            'š’ª' => 'ন্থ্র',
            'c«' => 'প্র',
            '¯—¡' => 'স্ত্ব',
            'g¨©' => 'র্ম্য',
            'kª“' => 'শ্রু',
            '¤^ª' => 'ম্ব্র',
            '¤cÖ' => 'ম্প্র',
            '`¨©' => 'দ্র্য',
            '®cÖ' => 'ষ্প্র',
            '¯—¨' => 'স্ত্য',
            'l¨©' => 'র্ষ্য',
            '¯’¨' => 'স্থ্য',
            '¯cÖ' => 'স্প্র',
            '”Qª' => 'চ্ছ্র',
            '”Q¡' => 'চ্ছ্ব',
            'c¨©' => 'প্র্য',
            'Z¨©' => 'র্ত্য',
            '•N¨' => 'ঙ্ঘ্য',
            'X¨©' => 'র্ঢ্য',
            'n¨©' => 'র্হ্য',
            '`ª©' => 'র্দ্র',
            'aŸ©' => 'র্ধ্ব',
            'k¦©' => 'র্শ্ব',
            'MÖ©' => 'র্গ্র',
            'j&d' => 'ল্‌ফ',
            'j&f' => 'ল্‌ভ',
            '•N' => 'ঙ্ঘ',
            '•¶' => 'ঙ্ক্ষ',
            '¼¨' => 'ঙ্ক্য',
            '•g' => 'ঙ্ম',
            '”P' => 'চ্চ',
            '”Q' => 'চ্ছ',
            'n¨' => 'হ্য',
            '”T' => 'চ্ঞ',
            'P¨' => 'চ্য',
            'U¡' => 'ট্ব',
            '¾¡' => 'জ্জ্ব',
            'nŸ' => 'হ্ব',
            'R¡' => 'জ্ব',
            '”¡' => 'চ্ব',
            'R¨' => 'জ্য',
            'Rª' => 'জ্র',
            'nœ' => 'হ্ণ',
            'mª' => 'স্র',
            '¯¬' => 'স্ল',
            '½¨' => 'ঙ্গ্য',
            'Wª' => 'ড্র',
            'Zœ' => 'ত্ন',
            'U¨' => 'ট্য',
            'W¡' => 'ড্ব',
            'W¨' => 'ড্য',
            'Ë¨' => 'ত্ত্য',
            '¯^' => 'স্ব',
            'X¨' => 'ঢ্য',
            'Xª' => 'ঢ্র',
            'Nª' => 'ঘ্র',
            'É¨' => 'ণ্ঠ্য',
            'Ê¨' => 'ণ্ড্য',
            'Êª' => 'ণ্ড্র',
            'U¥' => 'ট্ম',
            'YX' => 'ণ্ঢ',
            'Yè' => 'ণ্ণ',
            'Y¡' => 'ণ্ব',
            'Y¥' => 'ণ্ম',
            'Y¨' => 'ণ্য',
            'rK' => 'ৎক',
            '¯c' => 'স্প',
            'Üª' => 'ন্ধ্র',
            'Uª' => 'ট্র',
            'm¨' => 'স্য',
            '›Ø' => 'ন্দ্ব',
            'Ë¡' => 'ত্ত্ব',
            'rm' => 'ৎস',
            'Nœ' => 'ঘ্ন',
            'Í¨' => 'ত্ম্য',
            'Z¨' => 'ত্য',
            '¯’' => 'স্থ',
            'M­' => 'গ্ল',
            'rj' => 'ৎল',
            '_¡' => 'থ্ব',
            '_¨' => 'থ্য',
            'Ï¡' => 'দ্দ্ব',
            '™£' => 'দ্ভ্র',
            '˜M' => 'দ্গ',
            '™¢' => 'দ্ভ',
            '™N' => 'দ্ঘ',
            '¯¿' => 'স্ত্র',
            'MÖ' => 'গ্র',
            'Ë«' => 'ত্ত্র',
            '¯Í' => 'স্ত',
            'šÍ' => 'ন্ত',
            'Z¥' => 'ত্ম',
            '_ª' => 'থ্র',
            'aœ' => 'ধ্ন',
            'Z¡' => 'ত্ব',
            'š¿' => 'ন্ত্র',
            'M¦' => 'গ্ব',
            '`ª' => 'দ্র',
            'aŸ' => 'ধ্ব',
            'a¥' => 'ধ্ম',
            'aª' => 'ধ্র',
            'kª' => 'শ্র',
            '÷ª' => 'স্ট্র',
            'Ûª' => 'ন্ড্র',
            '¯—' => 'স্ত',
            '`¨' => 'দ্য',
            'š—' => 'ন্ত',
            'š‘' => 'ন্ত',
            'nª' => 'হ্র',
            'š’' => 'ন্থ',
            '•¸' => 'ঙ্গু',
            '›`' => 'ন্দ',
            'Mœ' => 'গ্ন',
            'N¨' => 'ঘ্য',
            'Ü¨' => 'ন্ধ্য',
            '¯§' => 'স্ম',
            'M¥' => 'গ্ম',
            '›U' => 'ন্ট',
            '®§' => 'ষ্ম',
            'b¥' => 'ন্ম',
            'b¨' => 'ন্য',
            '¯Œ' => 'স্ক্র',
            '¯‹' => 'স্ক',
            'cœ' => 'প্ন',
            'l¨' => 'ষ্য',
            'c¨' => 'প্য',
            'cÖ' => 'প্র',
            '»ª' => 'গ্ধ্র',
            'f¨' => 'ভ্য',
            '®c' => 'ষ্প',
            'd«' => 'ফ্র',
            'd¬' => 'ফ্ল',
            '®^' => 'ষ্ব',
            '»¨' => 'গ্ধ্য',
            'eŸ' => 'ব্ব',
            'e¨' => 'ব্য',
            'eª' => 'ব্র',
            'e­' => 'ব্ল',
            'K¬' => 'ক্ল',
            '¶è' => 'ক্ষ্ণ',
            'c­' => 'প্ল',
            'f¡' => 'ভ্ব',
            'L©' => 'র্খ',
            'š^' => 'ন্ব',
            '•L' => 'ঙ্খ',
            'i“' => 'রু',
            'ô¨' => 'ষ্ঠ্য',
            '¤^' => 'ম্ব',
            '¤¢' => 'ম্ভ',
            '¤£' => 'ম্ভ্র',
            '¤§' => 'ম্ম',
            'g¨' => 'ম্য',
            'gª' => 'ম্র',
            'A¨' => 'অ্য',
            'n¬' => 'হ্ল',
            '¤¬' => 'ম্ল',
            '¤c' => 'ম্প',
            'h¨' => 'য্য',
            'K©' => 'র্ক',
            'Lª' => 'খ্র',
            'L¨' => 'খ্য',
            'f¬' => 'ভ্ল',
            '¶¨' => 'ক্ষ্য',
            '²¨' => 'ক্ষ্ম্য',
            '¶¡' => 'ক্ষ্ব',
            'M©' => 'র্গ',
            'M¨' => 'গ্য',
            '®Œ' => 'ষ্ক্র',
            'h©' => 'র্য',
            'P©' => 'র্চ',
            'Q©' => 'র্ছ',
            'R©' => 'র্জ',
            'S©' => 'র্ঝ',
            'U©' => 'র্ট',
            'W©' => 'র্ড',
            'Y©' => 'র্ণ',
            'Z©' => 'র্ত',
            '_©' => 'র্থ',
            '`©' => 'র্দ',
            'Î©' => 'র্ত্র',
            'bœ' => 'ন্ন',
            'f©' => 'র্ভ',
            'd©' => 'র্ফ',
            'c©' => 'র্প',
            'b©' => 'র্ন',
            'Av' => 'আ',
            'a©' => 'র্ধ',
            'K¨' => 'ক্য',
            'l©' => 'র্ষ',
            'Ø©' => 'র্দ্ব',
            'N©' => 'র্ঘ',
            'g©' => 'র্ম',
            'a¨' => 'ধ্য',
            'j¡' => 'ল্ব',
            'm©' => 'র্স',
            'j©' => 'র্ল',
            'ª¨' => '্র্য',
            'i¨' => 'র‌্য',
            '³«' => 'ক্ত্র',
            'óª' => 'ষ্ট্র',
            'ó¨' => 'ষ্ট্য',
            '®‹' => 'ষ্ক',
            'k©' => 'র্শ',
            'é¨' => 'ল্ক্য',
            '±ª' => 'ক্ট্র',
            'kœ' => 'শ্ন',
            'K¡' => 'ক্ব',
            'k¨' => 'শ্য',
            'k¥' => 'শ্ম',
            'k¦' => 'শ্ব',
            'n©' => 'র্হ',
            'k­' => 'শ্ল',
            'j¥' => 'ল্ম',
            'j­' => 'ল্ল',
            'j¨' => 'ল্য',
            '·' => 'ক্স',
            '¸' => 'গু',
            'Ã' => 'ঞ্ছ',
            '¼' => 'ঙ্ক',
            '½' => 'ঙ্গ',
            '¾' => 'জ্জ',
            'À' => 'জ্ঝ',
            '¶' => 'ক্ষ',
            'B' => 'ই',
            'Á' => 'জ্ঞ',
            'Â' => 'ঞ্চ',
            'ý' => 'হ্ন',
            'Þ' => 'প্ট',
            'Û' => 'ন্ড',
            'Ø' => 'দ্ব',
            '²' => 'ক্ষ্ম',
            'Ù' => 'দ্ম',
            'Í' => 'ত্ম',
            'õ' => 'ষ্ফ',
            'Å' => 'ঞ্ঝ',
            'Î' => 'ত্র',
            'Ï' => 'দ্দ',
            '×' => 'দ্ধ',
            'Ú' => 'ন্ঠ',
            'µ' => 'ক্র',
            'Æ' => 'ট্ট',
            'Ä' => 'ঞ্জ',
            'Ü' => 'ন্ধ',
            '»' => 'গ্ধ',
            '³' => 'ক্ত',
            '´' => 'ক্ম',
            'ò' => 'ষ্ণ',
            'ç' => 'ম্ফ',
            'ö' => 'স্খ',
            'â' => 'ব্জ',
            'Ð' => 'ণ্ড',
            'Ó' => '”',
            'ð' => 'শ্চ',
            'í' => 'ল্প',
            'ì' => 'ল্ড',
            'ë' => 'ল্ট',
            'ê' => 'ল্গ',
            'é' => 'ল্ক',
            '±' => 'ক্ট',
            'ñ' => 'শ্ছ',
            'Ê' => 'ণ্ড',
            'å' => 'ভ্র',
            'ä' => 'ব্ধ',
            'ã' => 'ব্দ',
            'á' => 'প্স',
            '÷' => 'স্ট',
            'u' => 'ঁ',
            'ø' => 'স্ন',
            'ù' => 'স্ফ',
            'þ' => 'হ্ম',
            'ó' => 'ষ্ট',
            'û' => 'হু',
            'ü' => 'হৃ',
            's' => 'ং',
            'à' => 'প্প',
            't' => 'ঃ',
            'A' => 'অ',
            'ô' => 'ষ্ঠ',
            'ï' => 'শু',
            'ß' => 'প্ত',
            'æ' => 'ম্ন',
            'Ë' => 'ত্ত',
            'y' => 'ু',
            'É' => 'ণ্ঠ',
            'p' => 'ঢ়',
            '‚' => 'ূ',
            '„' => 'ৃ',
            'ৄ' => 'ৄ',
            'Š' => 'ৗ',
            'r' => 'ৎ',
            'o' => 'ড়',
            'q' => 'য়',
            'V' => 'ঠ',
            'ৠ' => 'ৠ',
            '0' => '০',
            '2' => '২',
            '…' => 'ৃ',
            '3' => '৩',
            '5' => '৫',
            '6' => '৬',
            '1' => '১',
            'i' => 'র',
            '8' => '৮',
            'M' => 'গ',
            'L' => 'খ',
            'I' => 'ও',
            'N' => 'ঘ',
            'S' => 'ঝ',
            'H' => 'ঐ',
            'U' => 'ট',
            'ঌ' => 'ঌ',
            'G' => 'এ',
            'P' => 'চ',
            'Q' => 'ছ',
            'F' => 'ঋ',
            'J' => 'ঔ',
            'T' => 'ঞ',
            'R' => 'জ',
            'K' => 'ক',
            'O' => 'ঙ',
            '7' => '৭',
            '9' => '৯',
            'È' => 'ণ্ট',
            'ঽ' => 'ঽ',
            'j' => 'ল',
            'k' => 'শ',
            'l' => 'ষ',
            'm' => 'স',
            'n' => 'হ',
            '়' => '়',
            'v' => 'া',
            'h' => 'য',
            'x' => 'ী',
            'E' => 'ঊ',
            '°' => 'ক্ক',
            'C' => 'ঈ',
            'Ì' => 'ত্থ',
            'Ç' => 'ড্ড',
            'ÿ' => 'ক্ষ',
            'D' => 'উ',
            'g' => 'ম',
            '|' => '।',
            'X' => 'ঢ',
            'Ô' => '‘',
            'Õ' => '’',
            'Ò' => '“',
            '~' => 'ূ',
            'z' => 'ু',
            'W' => 'ড',
            'f' => 'ভ',
            'Y' => 'ণ',
            'e' => 'ব',
            'Z' => 'ত',
            '_' => 'থ',
            '`' => 'দ',
            'a' => 'ধ',
            'b' => 'ন',
            'c' => 'প',
            'd' => 'ফ',
            '4' => '৪',
        ];
    }

    /**
     * Get list of kars for Avro
     *
     * @return string
     */
    public static function getAvroKars()
    {
        return '(‡|†|w|ˆ)(ক্ক|ক্ট|ক্ট্র|ক্ত|ক্ত্র|ক্ব|´|ক্য|ক্র|ক্ল|ক্ষ|ক্ষè|ক্ষ¡|ক্ষ্ম|ক্ষ্ম্য|ক্ষ্য|ক্স|খ্য|খ্র|গ্ণ|গ্ধ|গ্ধ্য|গ্ধ্র|গ্ন|গ্ন্য|গ¦|গ্ম|গ্য|গ্র|র্গ্য|গ্ল|ঘœ|ঘ্য|ঘ্র|ঙ্ক|ঙ্ক্ত|ঙ্ক্য|ক্সক্ষ|ঙ্খ|ঙ্গ|ঙ্গ্য|ঙ্ঘ|ঙ্ঘ্য|ঙ্ঘ্র|ক্সম|চ্চ|চ্ছ|চ্ছ্ব|চ্ছ্র|চ্ঞ|”¡|চ্য|জ্জ|জ্জ্ব|জ্ঝ|জ্ঞ|জ্ব|জ্য|জ্র|ঞ্চ|ঞ্ছ|ঞ্জ|ঞ্ঝ|ট্ট|ট্ব|ট্ম|ট্য|ট্র|ড্ড|ড¡|ড্য|ড্র|ক্ষ|ঢ্য|ঢ্র|ণ্ট|ণ্ঠ|ণ্ঠ্য|ণ্ড|ণ্ড্য|ণ্ড্র|ণঢ|ণè|ণ¡|ণ¥|ণ্য|ৎক|ত্ত|ত্ত্ব|ত্ত্য|ত্থ|তœ|ত্ব|Í|Í্য|ত্য|ত্র|র্ত্য|ৎল|ৎস|থ্ব|থ্য|থ্র|দ্গ|™ঘ|দ্দ|দ্দ¡|দ্ধ|দ্ব|দ্ভ|™£|দ্ম|দ্য|দ্র|র্দ্য|ধœ|ধ্ব|ধ্ম|ধ্য|ধ্র|ন্ট|ন্ট্র|ন্ঠ|ন্ড|ন্ড্র|ন্ত|ন্ত্ব|ন্ত্য|ন্ত্র|র্ন্ত্য|ন্থ|ন্থ্র|ন্দ|ন্দ্য|ন্দ্ব|ন্দ্র|ন্ধ|ন্ধ্য|ন্ধ্র|ন্ন|ন্ব|ন্ম|ন্য|প্ট|প্ত|প্ন|প্প|প্য|প্র|র্প্য|প্ল|প্স|ফ্র|ফ্ল|ব্জ|ব্দ|ব্ধ|ব্ব|ব্য|ব্র|ব্ল|ভ¡|ভ্য|ভ্র|ু|¤প|ম্প্র|ম্ফ|ম্ব|ম্ব্র|ম্ভ|ম্ভ্র|ম্ম|ম্য|ম্র|¤¬|য্য|র্ক|র্ক্য|র্গ্য|র্ঘ্য|র্চ্য|র্জ্য|র্ণ্য|র্ত্য|র্থ্য|র্ব্য|র্ম্য|র্শ্য|র্ষ্য|র্হ্য|র্খ|র্গ|র্গ্র|র্ঘ|র্চ|র্ছ|র্জ|র্ঝ|র্ট|র্ড|র্ণ|র্ত|র্ত্র|র্থ|র্দ|র্দ্ব|র্দ্র|র্ধ|র্ধ্ব|র্ন|র্প|র্ফ|র্ভ|র্ম|র্য|র্ল|র্শ|র্শ্ব|র্ষ|র্স|র্হ|র্ঢ্য|ল্ক|ল্ক্য|ল্গ|ল্ট|ল্ড|ল্প|ল্ফ|ল¡|ল্ভ|ল্ম|ল্য|ল্ল|শ্চ|ñ|শ্ন|শ্ব|শ্ম|শ্য|শ্র|শ্ল|ষ্ক|ষ্ক্র|ষ্ট|ষ্ট্য|ষ্ট্র|ষ্ঠ|ষ্ঠ্য|ষ্ণ|®প|®প্র|ষ্ফ|®^|ষ্ম|ষ্য|স্ক্র|স্ক|স্খ|স্ট|স্ট্র|স্ত|স্ত¡|স্ত্য|স্ত্র|স্থ|স্থ্য|ø|¯প|¯প্র|¯প্ল|স্ফ|স্ব|স্ম|স্য|স্র|¯¬|হৃ|হ্ন|হ্ব|হ্ম|হ্য|হ্র|হ|ঋ|ক|খ|গ|ঘ|ঙ|চ|ছ|জ|ঝ|ঞ|ট|ঠ|ড|ঢ|ণ|ত|থ|দ|ধ|ন|প|ফ|ব|ভ|ম|য|র|ল|শ|ষ|স|হ|ড়|ঢ়|য়)';
    }
}
