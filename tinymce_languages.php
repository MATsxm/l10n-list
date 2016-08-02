<?php
/**
 * .json file (must be converted) to use with the TinyMCE inline multi-language tags.
 * See: github.com/joomla/joomla-cms/pull/11367
 * Based on: gist.github.com/dgt41/c18160606be9ca963b54c5b91ecc9e9f
 * 
 * This first list will include the "official" languages for Joomla! Languages Packs + few others.
 * ISO 639-1 used when possible and country code when needed.
 * Names are those of languages without country names (could be added).
 * English alphabetical name order. Some language names are not capitalized as in french it is 'français' and NOT 'Français' 
 */

[
      {"code":"af-ZA","name":"Afrikaans","nativeName":"Afrikaans","dir":"ltr"}, //361
      {"code":"sq-AL","name":"Albanian","nativeName":"Shqip","dir":"ltr"}, //311
      {"code":"ar","name":"Arabic","nativeName":"عربي","dir":"rtl"}, //360
      {"code":"hy-AM","name":"Armenian","nativeName":"Հայերեն","dir":"ltr"}, //344 + Crowdin 83%
      {"code":"eu-ES","name":"Basque","nativeName":"euskara","dir":"ltr"}, //360
      {"code":"be-BY","name":"Belarusian","nativeName":"Беларуская","dir":"ltr"}, //321
      {"code":"bn-BD","name":"Bengali (Bangladesh)","nativeName":"বাংলা","dir":"ltr"},//Crowdin 93%
      {"code":"bs-BA","name":"Bosnian (Latin)","nativeName":"bosanski","dir":"ltr"}, //348
      {"code":"bg","name":"Bulgarian","nativeName":"български","dir":"ltr"}, //330 + Crowdin 95%
      {"code":"ca-ES","name":"Catalan","nativeName":"Català","dir":"ltr"}, //360 + Crowdin 99%
      {"code":"zh-CN","name":"Chinese (Simplified)","nativeName":"中文 (简体)","dir":"ltr"}, //341
      {"code":"zh-TW","name":"Chinese (Traditional)","nativeName":"正體中文 (繁體)","dir":"ltr"}, //360 + Crowdin 99%
      {"code":"hr","name":"Croatian","nativeName":"Hrvatski","dir":"ltr"}, //Crowdin 100%
      {"code":"cs","name":"Czech","nativeName":"Čeština","dir":"ltr"}, //360
      {"code":"da","name":"Danish","nativeName":"dansk","dir":"ltr"}, //Crowdin 100%
      {"code":"nl","name":"Dutch","nativeName":"Nederlands","dir":"ltr"}, //Crowdin 100%
      {"code":"en-AU","name":"English (Australian)","nativeName":"English (Australian)","dir":"ltr"},
      {"code":"en-CA","name":"English (Canadian)","nativeName":"English (Canadian)","dir":"ltr"},
      {"code":"en-GB","name":"English (British)","nativeName":"English (British)","dir":"ltr"},
      {"code":"en-US","name":"English (American)","nativeName":"English (American)","dir":"ltr"}, //Crowdin 100%
      {"code":"eo","name":"Esperanto","nativeName":"Esperanto","dir":"ltr"},
      {"code":"et","name":"Estonian","nativeName":"Eesti keel","dir":"ltr"},
      {"code":"fi","name":"Finnish","nativeName":"suomi","dir":"ltr"},
    //flemish
      {"code":"fr","name":"French","nativeName":"français","dir":"ltr"},
      {"code":"fr-CA","name":"French (Canadian)","nativeName":"français (canadien)","dir":"ltr"},
      {"code":"gl","name":"Galician","nativeName":"Galego","dir":"ltr"},
      {"code":"ka","name":"Georgian","nativeName":"ქართული","dir":"ltr"},
      {"code":"de","name":"German","nativeName":"Deutsch","dir":"ltr"},
      {"code":"el","name":"Greek, Modern","nativeName":"Ελληνικά","dir":"ltr"},
      {"code":"he","name":"Hebrew (modern)","nativeName":"עברית","dir":"rtl"},
      {"code":"hi","name":"Hindi","nativeName":"हिन्दीिंदी","dir":"ltr"},
      {"code":"hu","name":"Hungarian","nativeName":"Magyar","dir":"ltr"}, //Crowdin 100%
      {"code":"is","name":"Icelandic","nativeName":"íslenska","dir":"ltr"},
      {"code":"id","name":"Indonesian","nativeName":"Bahasa Indonesia","dir":"ltr"}, //Crowdin 100%
      {"code":"ga","name":"Irish","nativeName":"Gaeilge","dir":"ltr"},
      {"code":"it","name":"Italian","nativeName":"Italiano","dir":"ltr"},
      {"code":"ja","name":"Japanese","nativeName":"日本語","dir":"ltr"},
      {"code":"km","name":"Khmer","nativeName":"ភាសាខ្មែរ","dir":"ltr"},
      {"code":"ko","name":"Korean","nativeName":"한국어","dir":"ltr"},
      {"code":"ku-IQ","name":"Kurdish","nativeName":"ردیی ناوەڕاست (کوردستان)","dir":"rtl"},
      {"code":"lv","name":"Latvian","nativeName":"Latviešu","dir":"ltr"},
      {"code":"lt","name":"Lithuanian","nativeName":"lietuvių kalba","dir":"ltr"},
      {"code":"mk","name":"Macedonian","nativeName":"Македонски","dir":"ltr"}, //Crowdin 100%
      {"code":"ms","name":"Malay","nativeName":"bahasa Melayu, بهاس ملايو‎","dir":"ltr"},
    //Montenegrin
      {"code":"nb-NO","name":"Norwegian Bokmål","nativeName":"Norsk bokmål","dir":"ltr"}, //Crowdin 100%
      {"code":"nn-NO","name":"Norwegian Nynorsk","nativeName":"Norsk nynorsk","dir":"ltr"},
      {"code":"oc","name":"Occitan","nativeName":"Occitan lengadocian","dir":"ltr"},
      {"code":"fa","name":"Persian","nativeName":"فارسی","dir":"rtl"},
      {"code":"pl","name":"Polish","nativeName":"polski","dir":"ltr"},
      {"code":"pt","name":"Portuguese","nativeName":"Português","dir":"ltr"}, //Crowdin 100%
      {"code":"pt-BR","name":"Portuguese (Brazilian)","nativeName":"Português do Brasil","dir":"ltr"}, //Crowdin 100%
      {"code":"ro","name":"Romanian","nativeName":"română","dir":"ltr"},
      {"code":"ru","name":"Russian","nativeName":"Русский","dir":"ltr"}, //Crowdin 100%
      {"code":"sr","name":"Serbian","nativeName":"српски","dir":"ltr"},
      {"code":"sr-Latn","name":"Serbian","nativeName":"Srpski","dir":"ltr"},
      {"code":"si","name":"Sinhala","nativeName":"සිංහල","dir":"ltr"},
      {"code":"sk","name":"Slovak","nativeName":"slovenčina","dir":"ltr"}, //Crowdin 100%
      {"code":"sl","name":"Slovenian","nativeName":"slovensko","dir":"ltr"}, //Crowdin 100%
      {"code":"es","name":"Spanish","nativeName":"Español","dir":"ltr"},
      {"code":"es-CO","name":"Spanish (Colombia)","nativeName":"Español de Colombia","dir":"ltr"}, //Crowdin 100%
      {"code":"sw","name":"Swahili","nativeName":"Kiswahili","dir":"ltr"},
      {"code":"sv-SE","name":"Swedish","nativeName":"svenska","dir":"ltr"}, //Crowdin 100%
      {"code":"ta","name":"Tamil","nativeName":"தமிழ்","dir":"ltr"},
      {"code":"th","name":"Thai","nativeName":"ไทย","dir":"ltr"},     
      {"code":"tr","name":"Turkish","nativeName":"Türkçe","dir":"ltr"},
    //Turkmen
      {"code":"uk","name":"Ukrainian","nativeName":"Українська","dir":"ltr"},
    //Uyghur
      {"code":"vi","name":"Vietnamese","nativeName":"Tiếng Việt","dir":"ltr"},
      {"code":"cy","name":"Welsh","nativeName":"Cymraeg","dir":"ltr"},

    ]
