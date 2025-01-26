<?php

namespace Nanopkg\BanglaTextConverter\UnicodeToBijoy;

/**
 * KeyMapping
 *
 * @author IQBAL HASAN <iqbalhasan.dev@gmail.com>
 *
 * @link https://iqbalhasan.dev Author Homepage
 *
 * @license LICENSE The MIT License
 */
class KeyMapping
{
    /**
     * A sorted character key => value pair
     *
     * @return array
     */
    public static function getRules()
    {
        return static::CHAR_RULES + static::KAR_RULES + static::KAR_BEFORE_CHAR_RULES + static::SYM + static::NUM_RULES + static::REJOIN_RULES;
    }

    /**
     * A sorted character key => value pair
     *
     * @return array
     */
    const SORTED_CONJ_RULES = [
        'ন্ত্র্য' => 'š—¨©',
        'ক্ষ্ম্য' => '²¨',
        'স্প্\u200cল' => '¯c&j',
        'ঙ্\u200cক্ত' => 'O&³',

        'স্প্র' => '¯cÖ',
        'স্থ্য' => '¯’¨',
        'স্ত্র' => '¯¿',
        'স্ত্য' => '¯—¨',
        'স্ত্ব' => '¯—¡',

        'স্ট্র' => '÷ª',
        'স্ক্র' => '¯Œ',
        'ষ্প্র' => '®cÖ',
        'ষ্ঠ্য' => 'ô¨',
        'ষ্ট্র' => 'óª',

        'ষ্ট্য' => 'ó¨',
        'ষ্ক্র' => '®Œ',
        'ল্ক্য' => 'é¨',
        'র্হ্য' => 'n¨©',
        'র্ষ্য' => 'l¨©',

        'র্শ্য' => 'k¨©',
        'র্শ্ব' => 'k¦©',
        'র্ম্য' => 'g¨©',
        'র্ব্য' => 'e¨©',
        'র্ধ্ব' => 'aŸ©',

        'র্দ্র' => '`ª©',
        'র্দ্ব' => 'Ø©',
        'র্থ্য' => '_¨©',
        'র্ত্র' => 'Î©',
        'র্ত্য' => 'Z¨©',

        'র্ণ্য' => 'Y¨©',
        'র্ঢ্য' => 'X¨©',
        'র্জ্য' => 'R¨©',
        'র্চ্য' => 'P¨©',
        'র্ঘ্য' => 'N¨©',

        'র্গ্র' => 'MÖ©',
        'র্গ্য' => 'M¨©',
        'র্ক্য' => 'K¨©',
        'ম্ভ্র' => '¤£',
        'ম্ব্র' => '¤^ª',

        'ম্প্র' => '¤cÖ',
        'প্র্য' => 'c¨©',
        'ন্ধ্র' => 'Üª',
        'ন্ধ্য' => 'Ü¨',
        'ন্দ্র' => '›`ª',

        'ন্দ্য' => '›`¨',
        'ন্দ্ব' => '›Ø',
        'ন্থ্র' => 'š’ª',
        'ন্ত্র' => 'š¿',
        'ন্ত্য' => 'š—¨',

        'ন্ত্ব' => 'š—¡',
        'ন্ড্র' => 'Ûª',
        'ন্ট্র' => '›Uª',
        'দ্র্য' => '`¨©',
        'দ্ভ্র' => '™£',

        'দ্দ্ব' => 'Ï¡',
        'ত্র্য' => 'Z¨©',
        'ত্ম্য' => 'Í¨',
        'ত্ত্র' => 'Ë«',
        'ত্ত্য' => 'Ë¨',

        'ত্ত্ব' => 'Ë¡',
        'ণ্ড্র' => 'Êª',
        'ণ্ড্য' => 'Ê¨',
        'ণ্ঠ্য' => 'É¨',
        'জ্জ্ব' => '¾¡',

        'চ্ছ্র' => '”Qª',
        'চ্ছ্ব' => '”Q¡',
        'ঙ্ঘ্র' => '•Nª',
        'ঙ্ঘ্য' => '•N¨',
        'ঙ্গ্য' => '½¨',

        'ঙ্ক্ষ' => '•¶',
        'ঙ্ক্য' => '¼¨',
        'গ্র্য' => 'M¨©',
        'গ্ন্য' => 'Mœ¨',
        'গ্ধ্র' => '»ª',

        'গ্ধ্য' => '»¨',
        'ক্ষ্য' => '¶¨',
        'ক্ষ্ম' => '²',
        'ক্ষ্ব' => '¶¡',
        'ক্ষ্ণ' => '¶è',

        'ক্ত্র' => '³«',
        'ক্ট্র' => '±ª',
        'ল্\u200cভ' => 'j&f',
        'ল্\u200cফ' => 'j&d',

        'গ্\u200cণ' => 'M&Y',
        'হ্ল' => 'n\xad',
        'হ্র' => 'nª',
        'হ্য' => 'n¨',
        'হ্ম' => 'þ',
        'হ্ব' => 'nŸ',

        'হ্ন' => 'ý',
        'হ্ণ' => 'nœ',
        'স্ল' => '¯¬',
        'স্র' => 'mª',
        'স্য' => 'm¨',
        'স্ম' => '¯§',

        'স্ব' => '¯^',
        'স্ফ' => 'ù',
        'স্প' => '¯c',
        'স্ন' => 'ø',
        'স্থ' => '¯’',
        'স্ত' => '¯Í',

        'স্ট' => '÷',
        'স্খ' => 'ö',
        'স্ক' => '¯‹',
        'ষ্য' => 'l¨',
        'ষ্ম' => '®§',
        'ষ্ব' => '®^',

        'ষ্ফ' => 'õ',
        'ষ্প' => '®c',
        'ষ্ণ' => 'ò',
        'ষ্ঠ' => 'ô',
        'ষ্ট' => 'ó',
        'ষ্ক' => '®‹',

        'শ্ল' => 'k\xad',
        'শ্র' => 'kª',
        'শ্য' => 'k¨',
        'শ্ম' => 'k¥',
        'শ্ব' => 'k¦',
        'শ্ন' => 'kœ',

        'শ্ছ' => 'ñ',
        'শ্চ' => 'ð',
        'ল্ল' => 'j\xad',
        'ল্য' => 'j¨',
        'ল্ম' => 'j¥',
        'ল্ব' => 'j¡',

        'ল্প' => 'í',
        'ল্ড' => 'ì',
        'ল্ট' => 'ë',
        'ল্গ' => 'ê',
        'ল্ক' => 'é',
        'র্হ' => 'n©',
        'র্স' => 'm©',

        'র্ষ' => 'l©',
        'র্শ' => 'k©',
        'র্ল' => 'j©',
        'র্য' => 'h©',
        'র্ম' => 'g©',
        'র্ভ' => 'f©',

        'র্ফ' => 'd©',
        'র্প' => 'c©',
        'র্ন' => 'b©',
        'র্ধ' => 'a©',
        'র্দ' => '`©',
        'র্থ' => '_©',

        'র্ত' => 'Z©',
        'র্ণ' => 'Y©',
        'র্ড' => 'W©',
        'র্ট' => 'U©',
        'র্ঝ' => 'S©',
        'র্জ' => 'R©',

        'র্ছ' => 'Q©',
        'র্চ' => 'P©',
        'র্ঘ' => 'N©',
        'র্গ' => 'M©',
        'র্খ' => 'L©',
        'র্ক' => 'K©',

        'য্য' => 'h¨',
        'ম্ল' => '¤¬',
        'ম্র' => 'gª',
        'ম্য' => 'g¨',
        'ম্ম' => '¤§',
        'ম্ভ' => '¤¢',

        'ম্ব' => '¤^',
        'ম্ফ' => 'ç',
        'ম্প' => '¤c',
        'ম্ন' => 'æ',
        'ভ্র' => 'å',
        'ভ্য' => 'f¨',

        'ভ্ব' => 'f¡',
        'ব্ল' => 'e\xad',
        'ব্র' => 'eª',
        'ব্য' => 'e¨',
        'ব্ব' => 'eŸ',
        'ব্ধ' => 'ä',

        'ব্দ' => 'ã',
        'ব্জ' => 'â',
        'ফ্ল' => 'd¬',
        'ফ্র' => 'd«',
        'প্স' => 'á',
        'প্ল' => 'c\xad',

        'প্র' => 'cÖ',
        'প্য' => 'c¨',
        'প্প' => 'à',
        'প্ন' => 'cœ',
        'প্ত' => 'ß',
        'প্ট' => 'Þ',

        'ন্য' => 'b¨',
        'ন্ম' => 'b¥',
        'ন্ব' => 'š^',
        'ন্ন' => 'bœ',
        'ন্ধ' => 'Ü',
        'ন্দ' => '›`',

        'ন্থ' => 'š’',
        'ন্ত' => 'šÍ',
        'ন্ড' => 'Û',
        'ন্ঠ' => 'Ú',
        'ন্ট' => '›U',
        'ধ্র' => 'aª',

        'ধ্য' => 'a¨',
        'ধ্ম' => 'a¥',
        'ধ্ব' => 'aŸ',
        'ধ্ন' => 'aœ',
        'দ্র' => '`ª',
        'দ্য' => '`¨',

        'দ্ম' => 'Ù',
        'দ্ভ' => '™¢',
        'দ্ব' => 'Ø',
        'দ্ধ' => '×',
        'দ্দ' => 'Ï',
        'দ্ঘ' => '™N',

        'দ্গ' => '˜M',
        'থ্র' => '_ª',
        'থ্য' => '_¨',
        'থ্ব' => '_¡',
        'ত্র' => 'Î',
        'ত্য' => 'Z¨',

        'ত্ম' => 'Z¥',
        'ত্ব' => 'Z¡',
        'ত্ন' => 'Zœ',
        'ত্থ' => 'Ì',
        'ত্ত' => 'Ë',
        'ণ্য' => 'Y¨',

        'ণ্ম' => 'Y¥',
        'ণ্ব' => 'Y¡',
        'ণ্ণ' => 'Yè',
        'ণ্ঢ' => 'YX',
        'ণ্ড' => 'Ð',
        'ণ্ঠ' => 'É',

        'ণ্ট' => 'È',
        'ঢ্র' => 'Xª',
        'ঢ্য' => 'X¨',
        'ড্র' => 'Wª',
        'ড্য' => 'W¨',
        'ড্ব' => 'W¡',

        'ড্ড' => 'Ç',
        'ট্র' => 'Uª',
        'ট্য' => 'U¨',
        'ট্ম' => 'U¥',
        'ট্ব' => 'U¡',
        'ট্ট' => 'Æ',

        'ঞ্ঝ' => 'Å',
        'ঞ্জ' => 'Ä',
        'ঞ্ছ' => 'Ã',
        'ঞ্চ' => 'Â',
        'জ্র' => 'Rª',
        'জ্য' => 'R¨',

        'জ্ব' => 'R¡',
        'জ্ঞ' => 'Á',
        'জ্ঝ' => 'À',
        'জ্জ' => '¾',
        'চ্য' => 'P¨',
        'চ্ব' => '”¡',

        'চ্ঞ' => '”T',
        'চ্ছ' => '”Q',
        'চ্চ' => '”P',
        'ঙ্ম' => '•g',
        'ঙ্ঘ' => '•N',
        'ঙ্গ' => '½',

        'ঙ্খ' => '•L',
        'ঙ্ক' => '¼',
        'ঘ্র' => 'Nª',
        'ঘ্য' => 'N¨',
        'ঘ্ন' => 'Nœ',
        'গ্ল' => 'M\xad',

        'গ্র' => 'MÖ',
        'গ্য' => 'M¨',
        'গ্ম' => 'M¥',
        'গ্ব' => 'M¦',
        'গ্ন' => 'Mœ',
        'গ্ধ' => '»',

        'খ্র' => 'Lª',
        'খ্য' => 'L¨',
        'ক্স' => '·',
        'ক্ষ' => '¶',
        'ক্ষ' => '²'
        'ক্ল' => 'K¬',
        'ক্র' => 'µ',

        'ক্য' => 'K¨',
        'ক্ম' => '´',
        'ক্ব' => 'K¡',
        'ক্ত' => '³',
        'ক্ট' => '±',
        'ক্ক' => '°',
        'ৎস' => 'rm',
        'ৎল' => 'rj',
    ];

    const FIX_ODD_CHARS = [
        'ড়্গ' => 'ÿ',
        '…' => '...',
        'ৎ' => 'r',
        '‘' => 'Ô',
        '’' => 'Õ',
        '“' => 'Ò',
        '”' => 'Ó',
        '–' => '-',
        '–' => '-',
        '—' => '-',
        'ব়' => 'i',
        'য়' => 'q',
        'ড়' => 'o',
        'ঢ়' => 'p',
    ];

    /**
     * Bengali characters as key => value map
     *
     * @var array
     */
    const CHAR_RULES = [
        'ং' => 's',
        'ঃ' => 't',
        'অ' => 'A',
        'আ' => 'Av',
        'ই' => 'B',
        'ঈ' => 'C',
        'উ' => 'D',
        'ঊ' => 'E',
        'ঋ' => 'F',
        'এ' => 'G',
        'ঐ' => 'H',
        'ও' => 'I',
        'ঔ' => 'J',
        'ক' => 'K',
        'খ' => 'L',
        'গ' => 'M',
        'ঘ' => 'N',
        'ঙ' => 'O',
        'চ' => 'P',
        'ছ' => 'Q',
        'জ' => 'R',
        'ঝ' => 'S',
        'ঞ' => 'T',
        'ট' => 'U',
        'ঠ' => 'V',
        'ড' => 'W',
        'ঢ' => 'X',
        'ণ' => 'Y',
        'ত' => 'Z',
        'থ' => '_',
        'দ' => '`',
        'ধ' => 'a',
        'ন' => 'b',
        'প' => 'c',
        'ফ' => 'd',
        'ব' => 'e',
        'ভ' => 'f',
        'ম' => 'g',
        'য' => 'h',
        'র' => 'i',
        'ল' => 'j',
        'শ' => 'k',
        'ষ' => 'l',
        'স' => 'm',
        'হ' => 'n',
        'ঢ়' => '~p',
        'ড়' => 'o',
        'ঁ' => 'u',

        // There are some people in the world....for
        'য়' => 'q',
        'য়' => 'q',
    ];

    /**
     * Kar rules
     *
     * @var array
     */
    const KAR_RULES = [
        'া' => 'v',
        'ী' => 'x',
        'ু' => 'y',
        'রু' => 'iªy',  // special case: র + উ-কার
        'ূ' => '‚',
        'ৃ' => '…',
    ];

    /**
     * Kars that positions before the characters
     *
     * @var array
     */
    const KAR_BEFORE_CHAR_RULES = [
        'ি' => 'w',
        'ে' => '‡',
        'ৈ' => 'ˆ',
    ];

    /**
     * Kars that wraps the character
     *
     * @var array
     */
    const KAR_AROUND_CHAR_RULES = [
        ' ো' => ' †<char>v',
        'ো' => '‡<char>v',
        ' ৌ' => ' †<char>Š',
        'ৌ' => '‡<char>Š',
    ];

    /**
     * Appends to static::KAR_AROUND_CHAR_RULES
     *
     * @var array
     */
    const KAR_AROUND_CHAR_RULES_PREPENDS = [
        '¨',
    ];

    /**
     * Number rules
     *
     * @var array
     */
    const NUM_RULES = [
        '০' => '0',
        '১' => '1',
        '২' => '2',
        '৩' => '3',
        '৪' => '4',
        '৫' => '5',
        '৬' => '6',
        '৭' => '7',
        '৮' => '8',
        '৯' => '9',
    ];

    /**
     * Rejoin rules
     *
     * @var array
     */
    const REJOIN_RULES = [
        'šÔ' => 'š‘',
        ' ‡' => ' †',
        '¯Õ' => '¯’v',
        'ÓQ' => '”Q',
        // '¯—' => "¯Í",
        // '¯-' => "¯Í",
        // 'š—' => "šÍ",
        // 'š-' => "šÍ",
        '¯\'' => '¯’',
        // '`ª“' => "`ªæ",
        // 'y' => "z",
        // '“' => "æ",
        ' ‰' => ' ˆ',
        '~' => '‚',
        //'iz' => "i“",
    ];

    /**
     * Basic symbols
     *
     * @var array
     */
    const SYM = [
        '।' => '|',
    ];

    /**
     * Unicode based rejoin rules
     *
     * @var array
     */
    const REJOIN_RULES_UNICODE = [
        'š‘' => 'ন্তু',
        'র্যাব' => 'র‌্যাব',
        'র্যাবে' => 'র‌্যাবে',
        '¯’া' => 'স্থা',
        '”েছ' => 'চ্ছে',
        '¯’' => 'স্থ',
        'র“' => 'রু',
        '¯’্য' => 'স্থ্য',
        '¯্রা' => 'স্রা',
        '¤œা' => 'ম্না',
        'ত্র“' => 'ত্রু',
        'তœ' => 'ত্ন',
        'Ñ' => '-',
    ];

    /**
     * Basic list of odd unicode characters
     *
     * @var array
     */
    const FIX_UNICODE = [
        'য়' => 'য়',
        'ব়' => 'র',
        'ঢ়' => 'ঢ়',
        'ড়' => 'ড়',
    ];

    /**
     * Kars that reside before the character
     *
     * @var array
     */
    const KARS_BEFORE_CHAR = ['ি', 'ে', 'ৈ'];

    /**
     * Will be prepended before static::KARS_BEFORE_CHAR if exists
     *
     * @var array
     */
    const KARS_BEFORE_PREPEND_CHAR = ['š'];

    const KARS_BEFORE_EDGE_CASE = ['¨'];
}
