<?php

return [
    'patterns' => [
        'all' => '/([၀-၉0-9]{1,2})(\s*\/\s*|\s*|\s*\-\s*)([က-အa-zA-Z]+)(\s*[\[\(]\s*|\s*|\s*\{\s*)(ပြု|နိုင်|Naing|N|Pyu|P)(\s*[\]\)]\s*|\s*|\s*\}\s*)([၀-၉0-9]{5,6})/iu',

        'eng' => '/([0-9]{1,2})(\s*\/\s*|\s*|\s*\-\s*)([A-Za-z]+)(\s*[\[\(]\s*|\s*|\s*\{\s*)(Naing|N|Pyu|P)(\s*[\]\)]\s*|\s*|\s*\}\s*)([\d]{5,6})/iu',

        'mm' => '/([၀-၉]{1,2})(\s*\/\s*|\s*|\s*\-\s*)([က-အ]+)(\s*[\[\(]\s*|\s*|\s*\{\s*)(ပြု|နိုင်)(\s*[\]\)]\s*|\s*|\s*\}\s*)([၀-၉]{5,6})/iu',
    ],

    'default-delimiter' => [
        'stateDelimiter' => '/',
        'districtDelimiter' => '(',
        'typeDelimiter' => ')',
    ],

    'numbers' => [
        ['mm' => '၀', 'eng' => '0'],
        ['mm' => '၁', 'eng' => '1'],
        ['mm' => '၂', 'eng' => '2'],
        ['mm' => '၃', 'eng' => '3'],
        ['mm' => '၄', 'eng' => '4'],
        ['mm' => '၅', 'eng' => '5'],
        ['mm' => '၆', 'eng' => '6'],
        ['mm' => '၇', 'eng' => '7'],
        ['mm' => '၈', 'eng' => '8'],
        ['mm' => '၉', 'eng' => '9'],
    ],

    'types' => [
        ['mm' => 'နိုင်', 'eng' => 'Naing'],
        ['mm' => 'ပြု', 'eng' => 'Pyu'],
        ['mm' => 'နိုင်', 'eng' => 'N'],
        ['mm' => 'ပြု', 'eng' => 'P'],
    ],

    'townships_pairs' => [
        ['eng' => 'WaMaNa', 'mm' => 'ဝမန'],
        ['eng' => 'HsaDaNa', 'mm' => 'ဆဒန'],
        ['eng' => 'AGaYa', 'mm' => 'အဂယ'],
        ['eng' => 'TaNaNa', 'mm' => 'တနန'],
        ['eng' => 'RaBaYa', 'mm' => 'ရဗယ'],
        ['eng' => 'KhaPhaNa', 'mm' => 'ခဖန'],
        ['eng' => 'HsaLaNa', 'mm' => 'ဆလန'],
        ['eng' => 'KaPaTa', 'mm' => 'ကပတ'],
        ['eng' => 'PaWaNa', 'mm' => 'ပဝန'],
        ['eng' => 'MaNjaNa', 'mm' => 'မညန'],
        ['eng' => 'HaPaNa', 'mm' => 'ဟပန'],
        ['eng' => 'MaKaTa', 'mm' => 'မကတ'],
        ['eng' => 'KaMaNa', 'mm' => 'ကမန'],
        ['eng' => 'HpaKaNa', 'mm' => 'ဖကန'],
        ['eng' => 'KaMaTa', 'mm' => 'ကမတ'],
        ['eng' => 'BaMaNa', 'mm' => 'ဗမန'],
        ['eng' => 'RaKaNa', 'mm' => 'ရကန'],
        ['eng' => 'MaLaNa', 'mm' => 'မလန'],
        ['eng' => 'MaMaNa', 'mm' => 'မမန'],
        ['eng' => 'LaGaNa', 'mm' => 'လဂန'],
        ['eng' => 'DaHpaYa', 'mm' => 'ဒဖယ'],
        ['eng' => 'MaSaNa', 'mm' => 'မစန'],
        ['eng' => 'PaTaA', 'mm' => 'ပတအ'],
        ['eng' => 'MaKhaBa', 'mm' => 'မခဘ'],
        ['eng' => 'NaMaNa', 'mm' => 'နမန'],
        ['eng' => 'PaNaDa', 'mm' => 'ပနဒ'],
        ['eng' => 'KhaBaDa', 'mm' => 'ခဘဒ'],
        ['eng' => 'KhaLaHpa', 'mm' => 'ခလဖ'],
        ['eng' => 'HsaPaBa', 'mm' => 'ဆပဘ'],
        ['eng' => 'LaKaNa', 'mm' => 'လကန'],
        ['eng' => 'DaMaHsa', 'mm' => 'ဒမဆ'],
        ['eng' => 'HpaRaHsa', 'mm' => 'ဖရဆ'],
        ['eng' => 'RaTaNa', 'mm' => 'ရတန'],
        ['eng' => 'BaLaKha', 'mm' => 'ဘလခ'],
        ['eng' => 'HpaHsaNa', 'mm' => 'ဖဆန'],
        ['eng' => 'RaThaNa', 'mm' => 'ရသန'],
        ['eng' => 'BaANa', 'mm' => 'ဘအန'],
        ['eng' => 'LaBaNa', 'mm' => 'လဘန'],
        ['eng' => 'PaKaNa', 'mm' => 'ပကန'],
        ['eng' => 'RaRaTha', 'mm' => 'ရရသ'],
        ['eng' => 'ThaTaKa', 'mm' => 'သတက'],
        ['eng' => 'ThaTaNa', 'mm' => 'သတန'],
        ['eng' => 'LaThaNa', 'mm' => 'လသန'],
        ['eng' => 'BaGaLa', 'mm' => 'ဘဂလ'],
        ['eng' => 'HpaPaNa', 'mm' => 'ဖပန'],
        ['eng' => 'KaMaMa', 'mm' => 'ကမမ'],
        ['eng' => 'KaKaRa', 'mm' => 'ကကရ'],
        ['eng' => 'KaHsaKa', 'mm' => 'ကဆက'],
        ['eng' => 'KaDaNa', 'mm' => 'ကဒန'],
        ['eng' => 'BaThaHsa', 'mm' => 'ဘသဆ'],
        ['eng' => 'MaWaTa', 'mm' => 'မဝတ'],
        ['eng' => 'SaKaLa', 'mm' => 'စကလ'],
        ['eng' => 'WaLaMa', 'mm' => 'ဝလမ'],
        ['eng' => 'HaKhaNa', 'mm' => 'ဟခန'],
        ['eng' => 'HtaTaLa', 'mm' => 'ထတလ'],
        ['eng' => 'HpaLaNa', 'mm' => 'ဖလန'],
        ['eng' => 'RaKhaDa', 'mm' => 'ရခဒ'],
        ['eng' => 'TaTaNa', 'mm' => 'တတန'],
        ['eng' => 'TaZaNa', 'mm' => 'တဇန'],
        ['eng' => 'KaKhaNa', 'mm' => 'ကခန'],
        ['eng' => 'MaTaNa', 'mm' => 'မတန'],
        ['eng' => 'MaTaPa', 'mm' => 'မတပ'],
        ['eng' => 'RaZaNa', 'mm' => 'ရဇန'],
        ['eng' => 'KaPaLa', 'mm' => 'ကပလ'],
        ['eng' => 'PaLaWa', 'mm' => 'ပလဝ'],
        ['eng' => 'HsaMaNa', 'mm' => 'ဆမန'],
        ['eng' => 'SaKaNa', 'mm' => 'စကန'],
        ['eng' => 'MaMaTa', 'mm' => 'မမတ'],
        ['eng' => 'RaBaNa', 'mm' => 'ရဗန'],
        ['eng' => 'WaLaNa', 'mm' => 'ဝလန'],
        ['eng' => 'KhaUNa', 'mm' => 'ခဥန'],
        ['eng' => 'KaBaLa', 'mm' => 'ကဘလ'],
        ['eng' => 'KaLaNa', 'mm' => 'ကလန'],
        ['eng' => 'RaUNa', 'mm' => 'ရဥန'],
        ['eng' => 'DaPaYa', 'mm' => 'ဒပယ'],
        ['eng' => 'TaHsaNa', 'mm' => 'တဆန'],
        ['eng' => 'MaRaNa', 'mm' => 'မရန'],
        ['eng' => 'KhaUTa', 'mm' => 'ခဥတ'],
        ['eng' => 'ARaTa', 'mm' => 'အရတ'],
        ['eng' => 'BaTaLa', 'mm' => 'ဘတလ'],
        ['eng' => 'YaMaPa', 'mm' => 'ယမပ'],
        ['eng' => 'PaLaNa', 'mm' => 'ပလန'],
        ['eng' => 'KaNaNa', 'mm' => 'ကနန'],
        ['eng' => 'HsaLaKa', 'mm' => 'ဆလက'],
        ['eng' => 'KaThaNa', 'mm' => 'ကသန'],
        ['eng' => 'HtaKhaNa', 'mm' => 'ထခန'],
        ['eng' => 'ATaNa', 'mm' => 'အတန'],
        ['eng' => 'KaLaTa', 'mm' => 'ကလတ'],
        ['eng' => 'PaLaBa', 'mm' => 'ပလဘ'],
        ['eng' => 'WaThaNa', 'mm' => 'ဝသန'],
        ['eng' => 'KaLaHta', 'mm' => 'ကလထ'],
        ['eng' => 'KaLaWa', 'mm' => 'ကလဝ'],
        ['eng' => 'MaKaNa', 'mm' => 'မကန'],
        ['eng' => 'TaMaNa', 'mm' => 'တမန'],
        ['eng' => 'KhaPaNa', 'mm' => 'ခပန'],
        ['eng' => 'MaThaNa', 'mm' => 'မသန'],
        ['eng' => 'KhaTaNa', 'mm' => 'ခတန'],
        ['eng' => 'HaMaLa', 'mm' => 'ဟမလ'],
        ['eng' => 'LaRaNa', 'mm' => 'လရန'],
        ['eng' => 'LaHaNa', 'mm' => 'လဟန'],
        ['eng' => 'NaYaNa', 'mm' => 'နယန'],
        ['eng' => 'PaHsaNa', 'mm' => 'ပဆန'],
        ['eng' => 'DaHaNa', 'mm' => 'ဒဟန'],
        ['eng' => 'MaPaLa', 'mm' => 'မပလ'],
        ['eng' => 'HtaPaKha', 'mm' => 'ထပခ'],
        ['eng' => 'HsaMaRa', 'mm' => 'ဆမရ'],
        ['eng' => 'NgaZaNa', 'mm' => 'ငဇန'],
        ['eng' => 'HtaWaNa', 'mm' => 'ထဝန'],
        ['eng' => 'LaLaNa', 'mm' => 'လလန'],
        ['eng' => 'ThaRaKha', 'mm' => 'သရခ'],
        ['eng' => 'RaPhaNa', 'mm' => 'ရဖန'],
        ['eng' => 'KaLaA', 'mm' => 'ကလအ'],
        ['eng' => 'MaARa', 'mm' => 'မအရ'],
        ['eng' => 'MaANa', 'mm' => 'မအန'],
        ['eng' => 'KaSaNa', 'mm' => 'ကစန'],
        ['eng' => 'TaThaRa', 'mm' => 'တသရ'],
        ['eng' => 'PaLaTa', 'mm' => 'ပလတ'],
        ['eng' => 'BaPaNa', 'mm' => 'ဘပန'],
        ['eng' => 'KhaMaKa', 'mm' => 'ခမက'],
        ['eng' => 'PaKaMa', 'mm' => 'ပကမ'],
        ['eng' => 'KaRaRa', 'mm' => 'ကရရ'],
        ['eng' => 'TaNgaNa', 'mm' => 'တငန'],
        ['eng' => 'RaTaRa', 'mm' => 'ရတရ'],
        ['eng' => 'HtaTaPa', 'mm' => 'ထတပ'],
        ['eng' => 'HpaMaNa', 'mm' => 'ဖမန'],
        ['eng' => 'KaKaNa', 'mm' => 'ကကန'],
        ['eng' => 'PaKhaNa', 'mm' => 'ပခန'],
        ['eng' => 'KaTaKha', 'mm' => 'ကတခ'],
        ['eng' => 'NjaLaPa', 'mm' => 'ညလပ'],
        ['eng' => 'DaUNa', 'mm' => 'ဒဥန'],
        ['eng' => 'ThaNaPa', 'mm' => 'သနပ'],
        ['eng' => 'KaWaNa', 'mm' => 'ကဝန'],
        ['eng' => 'ThaWaTa', 'mm' => 'သဝတ'],
        ['eng' => 'LaPaTa', 'mm' => 'လပတ'],
        ['eng' => 'AHpaNa', 'mm' => 'အဖန'],
        ['eng' => 'KaPaKa', 'mm' => 'ကပက'],
        ['eng' => 'ZaKaNa', 'mm' => 'ဇကန'],
        ['eng' => 'NaTaLa', 'mm' => 'နတလ'],
        ['eng' => 'PaMaNa', 'mm' => 'ပမန'],
        ['eng' => 'ThaKaNa', 'mm' => 'သကန'],
        ['eng' => 'PaTaTa', 'mm' => 'ပတတ'],
        ['eng' => 'PaTaNa', 'mm' => 'ပတန'],
        ['eng' => 'PaKhaTa', 'mm' => 'ပခတ'],
        ['eng' => 'RaNaKha', 'mm' => 'ရနခ'],
        ['eng' => 'KhaMaNa', 'mm' => 'ခမန'],
        ['eng' => 'TaTaKa', 'mm' => 'တတက'],
        ['eng' => 'MaBaNa', 'mm' => 'မဘန'],
        ['eng' => 'PaHpaNa', 'mm' => 'ပဖန'],
        ['eng' => 'SaLaNa', 'mm' => 'စလန'],
        ['eng' => 'SaTaRa', 'mm' => 'စတရ'],
        ['eng' => 'NgaHpaNa', 'mm' => 'ငဖန'],
        ['eng' => 'ThaRaNa', 'mm' => 'သရန'],
        ['eng' => 'MaHtaNa', 'mm' => 'မထန'],
        ['eng' => 'ALaNa', 'mm' => 'အလန'],
        ['eng' => 'HsaPaWa', 'mm' => 'ဆပဝ'],
        ['eng' => 'PaKhaKa', 'mm' => 'ပခက'],
        ['eng' => 'RaSaKa', 'mm' => 'ရစက'],
        ['eng' => 'HsaHpaNa', 'mm' => 'ဆဖန'],
        ['eng' => 'GaGaNa', 'mm' => 'ဂဂန'],
        ['eng' => 'HtaLaNa', 'mm' => 'ထလန'],
        ['eng' => 'KaHtaNa', 'mm' => 'ကထန'],
        ['eng' => 'MaNaMa', 'mm' => 'မနမ'],
        ['eng' => 'AMaZa', 'mm' => 'အမဇ'],
        ['eng' => 'MaRaMa', 'mm' => 'မရမ'],
        ['eng' => 'KhaAZa', 'mm' => 'ခအဇ'],
        ['eng' => 'MaNaTa', 'mm' => 'မနတ'],
        ['eng' => 'KhaMaSa', 'mm' => 'ခမစ'],
        ['eng' => 'MaRaTa', 'mm' => 'မရတ'],
        ['eng' => 'MaHaMa', 'mm' => 'မဟမ'],
        ['eng' => 'PaKaKha', 'mm' => 'ပကခ'],
        ['eng' => 'AMaYa', 'mm' => 'အမရ'],
        ['eng' => 'PaThaKa', 'mm' => 'ပသက'],
        ['eng' => 'PaULa', 'mm' => 'ပဥလ'],
        ['eng' => 'MaTaRa', 'mm' => 'မတရ'],
        ['eng' => 'ThaPaKa', 'mm' => 'သပက'],
        ['eng' => 'TaKaTa', 'mm' => 'တကတ'],
        ['eng' => 'KaHsaNa', 'mm' => 'ကဆန'],
        ['eng' => 'SaKaTa', 'mm' => 'စကတ'],
        ['eng' => 'TaTaU', 'mm' => 'တတဥ'],
        ['eng' => 'MaKhaNa', 'mm' => 'မခန'],
        ['eng' => 'TaThaNa', 'mm' => 'တသန'],
        ['eng' => 'NaHtaKa', 'mm' => 'နထက'],
        ['eng' => 'NjaUNa', 'mm' => 'ညဥန'],
        ['eng' => 'NgaThaRa', 'mm' => 'ငသရ'],
        ['eng' => 'MaHtaLa', 'mm' => 'မထလ'],
        ['eng' => 'ThaSaNa', 'mm' => 'သစန'],
        ['eng' => 'WaTaNa', 'mm' => 'ဝတန'],
        ['eng' => 'RaMaTha', 'mm' => 'ရမသ'],
        ['eng' => 'PaBaNa', 'mm' => 'ပဘန'],
        ['eng' => 'MaLaMa', 'mm' => 'မလမ'],
        ['eng' => 'KaMaRa', 'mm' => 'ကမရ'],
        ['eng' => 'KhaHsaNa', 'mm' => 'ခဆန'],
        ['eng' => 'ThaHpaRa', 'mm' => 'သပရ'],
        ['eng' => 'MaDaNa', 'mm' => 'မဒန'],
        ['eng' => 'RaMaNa', 'mm' => 'ရမန'],
        ['eng' => 'LaMaNa', 'mm' => 'လမန'],
        ['eng' => 'KhaZaNa', 'mm' => 'ခဇန'],
        ['eng' => 'ThaHtaNa', 'mm' => 'သထန'],
        ['eng' => 'BaLaNa', 'mm' => 'ဘလန'],
        ['eng' => 'SaTaNa', 'mm' => 'စတန'],
        ['eng' => 'RaThaTa', 'mm' => 'ရသတ'],
        ['eng' => 'PaNaKa', 'mm' => 'ပဏက'],
        ['eng' => 'MaUNa', 'mm' => 'မဥန'],
        ['eng' => 'MaPaNa', 'mm' => 'မပန'],
        ['eng' => 'KaTaNa', 'mm' => 'ကတန'],
        ['eng' => 'MaPaTa', 'mm' => 'မပတ'],
        ['eng' => 'BaThaTa', 'mm' => 'ဘသတ'],
        ['eng' => 'TaPaWa', 'mm' => 'တပဝ'],
        ['eng' => 'KaHpaNa', 'mm' => 'ကဖန'],
        ['eng' => 'AMaNa', 'mm' => 'အမန'],
        ['eng' => 'TaKaNa', 'mm' => 'တကန'],
        ['eng' => 'MaATa', 'mm' => 'မအတ'],
        ['eng' => 'GaMaNa', 'mm' => 'ဂမန'],
        ['eng' => 'KaTaLa', 'mm' => 'ကတလ'],
        ['eng' => 'NjaRaNa', 'mm' => 'ညရန'],
        ['eng' => 'HsaHsaNa', 'mm' => 'ဆဆန'],
        ['eng' => 'PaTaYa', 'mm' => 'ပတယ'],
        ['eng' => 'RaNgaNa', 'mm' => 'ရငန'],
        ['eng' => 'RaSaNa', 'mm' => 'ရစန'],
        ['eng' => 'HpaKhaNa', 'mm' => 'ဖခန'],
        ['eng' => 'NaTaRa', 'mm' => 'နတရ'],
        ['eng' => 'LaKhaNa', 'mm' => 'လခန'],
        ['eng' => 'NaSaNa', 'mm' => 'နစန'],
        ['eng' => 'KaHaNa', 'mm' => 'ကဟန'],
        ['eng' => 'KhaLaNa', 'mm' => 'ခလန'],
        ['eng' => 'KaLaDa', 'mm' => 'ကလဒ'],
        ['eng' => 'LaKhaTa', 'mm' => 'လခတ'],
        ['eng' => 'MaNaNa', 'mm' => 'မနန'],
        ['eng' => 'HaMaNa', 'mm' => 'ဟမန'],
        ['eng' => 'KaTaTa', 'mm' => 'ကတတ'],
        ['eng' => 'ThaNaNa', 'mm' => 'သနန'],
        ['eng' => 'TaYaNa', 'mm' => 'တယန'],
        ['eng' => 'PaYaNa', 'mm' => 'ပယန'],
        ['eng' => 'NaHpaNa', 'mm' => 'နဖန'],
        ['eng' => 'MaHpaTa', 'mm' => 'မဖတ'],
        ['eng' => 'MaKaHta', 'mm' => 'မကထ'],
        ['eng' => 'MaHsaTa', 'mm' => 'မဆတ'],
        ['eng' => 'NaKhaNa', 'mm' => 'နခန'],
        ['eng' => 'TaMaNja', 'mm' => 'တမည'],
        ['eng' => 'MaHaRa', 'mm' => 'မဟရ'],
        ['eng' => 'PaHsaTa', 'mm' => 'ပဆတ'],
        ['eng' => 'ThaPaNa', 'mm' => 'သပန'],
        ['eng' => 'NaKhaTa', 'mm' => 'နခတ'],
        ['eng' => 'NaMaTa', 'mm' => 'နမတ'],
        ['eng' => 'NaHsaNa', 'mm' => 'နဆန'],
        ['eng' => 'MaTaTa', 'mm' => 'မတတ'],
        ['eng' => 'MaNgaNa', 'mm' => 'မငန'],
        ['eng' => 'MaLaTa', 'mm' => 'မလတ'],
        ['eng' => 'HaPaTa', 'mm' => 'ဟပတ'],
        ['eng' => 'MaMaHta', 'mm' => 'မမထ'],
        ['eng' => 'NaTaNa', 'mm' => 'နတန'],
        ['eng' => 'PaLaHta', 'mm' => 'ပလထ'],
        ['eng' => 'KhaRaHa', 'mm' => 'ခရဟ'],
        ['eng' => 'MaHtaTa', 'mm' => 'မထတ'],
        ['eng' => 'MaYaNa', 'mm' => 'မယန'],
        ['eng' => 'MaPaHta', 'mm' => 'မပထ'],
        ['eng' => 'MaHsaNa', 'mm' => 'မဆန'],
        ['eng' => 'MaKhaTa', 'mm' => 'မခတ'],
        ['eng' => 'PaPaKa', 'mm' => 'ပပက'],
        ['eng' => 'MaHpaNa', 'mm' => 'မဖန'],
        ['eng' => 'MaYaTa', 'mm' => 'မယတ'],
        ['eng' => 'MaYaHta', 'mm' => 'မယထ'],
        ['eng' => 'TaKhaLa', 'mm' => 'တခလ'],
        ['eng' => 'TaLaNa', 'mm' => 'တလန'],
        ['eng' => 'PaThaNa', 'mm' => 'ပသန'],
        ['eng' => 'RaThaYa', 'mm' => 'ရသယ'],
        ['eng' => 'NgaHsaNa', 'mm' => 'ငဆန'],
        ['eng' => 'PaThaRa', 'mm' => 'ပသရ'],
        ['eng' => 'KaKaHta', 'mm' => 'ကကထ'],
        ['eng' => 'NgaPaTa', 'mm' => 'ငပတ'],
        ['eng' => 'HaKaKa', 'mm' => 'ဟကက'],
        ['eng' => 'NgaRaKa', 'mm' => 'ငရက'],
        ['eng' => 'NgaThaKha', 'mm' => 'ငသခ'],
        ['eng' => 'KaPaNa', 'mm' => 'ကပန'],
        ['eng' => 'HaThaTa', 'mm' => 'ဟသတ'],
        ['eng' => 'ZaLaNa', 'mm' => 'ဇလန'],
        ['eng' => 'AGaPa', 'mm' => 'အဂပ'],
        ['eng' => 'MaAPa', 'mm' => 'မအပ'],
        ['eng' => 'NjaTaNa', 'mm' => 'ညတန'],
        ['eng' => 'DaNaHpa', 'mm' => 'ဓနဖ'],
        ['eng' => 'AMaTa', 'mm' => 'အမတ'],
        ['eng' => 'BaKaLa', 'mm' => 'ဘကလ'],
        ['eng' => 'DaDaYa', 'mm' => 'ဒဒရ'],
        ['eng' => 'PaSaLa', 'mm' => 'ပစလ'],
        ['eng' => 'MaMaKa', 'mm' => 'မမက'],
        ['eng' => 'WaKhaMa', 'mm' => 'ဝခမ'],
        ['eng' => 'UTaTha', 'mm' => 'ဥတသ'],
        ['eng' => 'ZaYaTha', 'mm' => 'ဇယသ'],
        ['eng' => 'PaBaTha', 'mm' => 'ပဗသ'],
        ['eng' => 'DaKhaTha', 'mm' => 'ဒခသ'],
        ['eng' => 'ZaBaTha', 'mm' => 'ဇဘသ'],
    ],
];
