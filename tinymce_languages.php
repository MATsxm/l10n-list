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
      {"code":"hr","name":"Croatian","nativeName":"Hrvatski","dir":"ltr"}, //341 + Crowdin 100%
      {"code":"cs","name":"Czech","nativeName":"Čeština","dir":"ltr"}, //360
      {"code":"da","name":"Danish","nativeName":"dansk","dir":"ltr"}, //360 + Crowdin 100%
      {"code":"nl","name":"Dutch","nativeName":"Nederlands","dir":"ltr"}, //360 + Crowdin 100%
      {"code":"nl-BE","name":"Dutch (Belgium)","nativeName":"Flemish","dir":"ltr"}, //360 + Crowdin 99%
      {"code":"en-AU","name":"English (Australian)","nativeName":"English (Australian)","dir":"ltr"}, //360
      {"code":"en-CA","name":"English (Canadian)","nativeName":"English (Canadian)","dir":"ltr"}, //336 SOON
      {"code":"en-GB","name":"English (British)","nativeName":"English (British)","dir":"ltr"},
      {"code":"en-US","name":"English (American)","nativeName":"English (American)","dir":"ltr"}, //360 Crowdin 100%
      {"code":"eo","name":"Esperanto","nativeName":"Esperanto","dir":"ltr"}, // Crowdin 95%
      {"code":"et","name":"Estonian","nativeName":"Eesti keel","dir":"ltr"}, //360 Crowdin 96%
      {"code":"fi","name":"Finnish","nativeName":"suomi","dir":"ltr"}, //351
      {"code":"fr","name":"French","nativeName":"français","dir":"ltr"}, //360
      {"code":"fr-CA","name":"French (Canadian)","nativeName":"français (canadien)","dir":"ltr"}, //351 Crowdin 100%
      {"code":"gl-ES","name":"Galician","nativeName":"Galego","dir":"ltr"}, //331 Crowdin 70%
      {"code":"ka","name":"Georgian","nativeName":"ქართული","dir":"ltr"}, //Crowdin 70%
      {"code":"de","name":"German","nativeName":"Deutsch","dir":"ltr"}, //360 Crowdin 99%
      {"code":"el","name":"Greek, Modern","nativeName":"Ελληνικά","dir":"ltr"}, //342
      {"code":"he","name":"Hebrew (modern)","nativeName":"עברית","dir":"rtl"}, //311 Crowdin 92ù
      {"code":"hi-IN","name":"Hindi","nativeName":"हिन्दीिंदी","dir":"ltr"}, //336 Crowdin 30%
      {"code":"hu","name":"Hungarian","nativeName":"Magyar","dir":"ltr"}, //360 Crowdin 100%
      {"code":"is","name":"Icelandic","nativeName":"íslenska","dir":"ltr"}, //Crowdin 23%
      {"code":"id","name":"Indonesian","nativeName":"Bahasa Indonesia","dir":"ltr"}, //330 Crowdin 100%
      {"code":"ga-IE","name":"Irish","nativeName":"Gaeilge","dir":"ltr"}, //360 Crowdin to come
      {"code":"it","name":"Italian","nativeName":"Italiano","dir":"ltr"}, //360 Crowdin 96%
      {"code":"ja-JP","name":"Japanese","nativeName":"日本語","dir":"ltr"}, //360 Crowdin 96%
      {"code":"km-KH","name":"Khmer","nativeName":"ភាសាខ្មែរ","dir":"ltr"}, //345 Crowdin 93%
      {"code":"ko-KR","name":"Korean","nativeName":"한국어","dir":"ltr"}, //360 
      {"code":"lv","name":"Latvian","nativeName":"Latviešu","dir":"ltr"}, //343 Crowdin 99%
      {"code":"lt","name":"Lithuanian","nativeName":"lietuvių kalba","dir":"ltr"}, // Crowdin 94%
      {"code":"mk","name":"Macedonian","nativeName":"Македонски","dir":"ltr"}, //360 Crowdin 100%
      {"code":"ms-MY","name":"Malay","nativeName":"bahasa Melayu, بهاس ملايو‎","dir":"ltr"}, //341
      {"code":"spr-ME","name":"Montenegrin","nativeName":"Montenegrin","dir":"ltr"}, //331
      {"code":"nb-NO","name":"Norwegian Bokmål","nativeName":"Norsk bokmål","dir":"ltr"}, //351 Crowdin 100%
      {"code":"nn-NO","name":"Norwegian Nynorsk","nativeName":"Norsk nynorsk","dir":"ltr"}, //342 Crowdin 79%
      {"code":"oc","name":"Occitan","nativeName":"Occitan lengadocian","dir":"ltr"}, //Crowdin 26%
      {"code":"fa","name":"Persian","nativeName":"فارسی","dir":"rtl"}, //360 Crowdin 93%
      {"code":"pl","name":"Polish","nativeName":"polski","dir":"ltr"}, //362 Crowdin 100%
      {"code":"pt","name":"Portuguese","nativeName":"Português","dir":"ltr"}, //351 Crowdin 100%
      {"code":"pt-BR","name":"Portuguese (Brazilian)","nativeName":"Português do Brasil","dir":"ltr"}, //362 Crowdin 100%
      {"code":"ro","name":"Romanian","nativeName":"română","dir":"ltr"}, //360
      {"code":"ru","name":"Russian","nativeName":"Русский","dir":"ltr"}, //350 Crowdin 100%
      {"code":"sr-RS","name":"Serbian","nativeName":"српски","dir":"ltr"}, //362 Crowdin 45%
      {"code":"sr-YU","name":"Serbian","nativeName":"Srpski","dir":"ltr"}, //362
      {"code":"si-LK","name":"Sinhala","nativeName":"සිංහල","dir":"ltr"}, //331 Crowdin 10%
      {"code":"sk","name":"Slovak","nativeName":"slovenčina","dir":"ltr"}, //360 Crowdin 100%
      {"code":"sl-SI","name":"Slovenian","nativeName":"slovensko","dir":"ltr"}, //360 Crowdin 100%
      {"code":"es","name":"Spanish","nativeName":"Español","dir":"ltr"}, //360
      {"code":"es-CO","name":"Spanish (Colombia)","nativeName":"Español de Colombia","dir":"ltr"}, //Crowdin 100%
      {"code":"sw-KE","name":"Swahili","nativeName":"Kiswahili","dir":"ltr"}, //361
      {"code":"sv-SE","name":"Swedish","nativeName":"svenska","dir":"ltr"}, //362 Crowdin 100%
      {"code":"ta-IN","name":"Tamil","nativeName":"தமிழ்","dir":"ltr"}, //362 Crowdin 71%
      {"code":"th","name":"Thai","nativeName":"ไทย","dir":"ltr"}, //362    
      {"code":"tr","name":"Turkish","nativeName":"Türkçe","dir":"ltr"}, //351
    //Turkmen
      {"code":"uk-UA","name":"Ukrainian","nativeName":"Українська","dir":"ltr"}, //351 Crowdin 4%
      {"code":"vi-VN","name":"Vietnamese","nativeName":"Tiếng Việt","dir":"ltr"}, //321
      {"code":"cy-GB","name":"Welsh","nativeName":"Cymraeg","dir":"ltr"} //330 Crowdin 59%

    ]
