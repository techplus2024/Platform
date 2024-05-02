<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'id' => 1,
            'name' => 'Threat Actor Disco Group',
            'excerpt' => '',
            'description' => '<p>In this scenario, a threat actor group named “Disco Team” is modeled using STIX Threat Actor and Identity objects. Disco Team operates primarily in Spanish and they have been known to steal credit card information for financial gain. They use the e-mail alias “disco-team@stealthemail.com” publicly and are known alternatively as “Equipo del Discoteca”.',
            'category_id' => 2,
            'created_at' => '2023-10-04 12:01:05',
            'updated_at' => '2023-10-05 20:05:05',
            'rating' => 9,
            'owner' => 1,
            'price' => 1,
            'download' => 'b1c46c120bef524b2cd174da0cfbb08b.json',
            'status' => 'TR',
            'options' => '["option-2", "option-5"]',
            'picture' => ''
        ]);



        DB::table('items')->insert([
            'id' => 2,
            'name' => 'Intrusion Set',
            'excerpt' => '',
            'description' => '<p>This scenario represents an advanced persistent threat (APT) intrusion set that is suspected to be funded by the country “Franistan”. Their target is the Branistan People’s Party (BPP), one of the political parties of the country “Branistan”. This intrusion set consists of a couple of sophisticated campaigns and attack patterns against the BPP’s website. One campaign seeks to insert false information into the BPP’s web pages, while another is a DDoS effort against the BPP web servers.</p><ul><li>Defining Campaigns</li><li>Threat Actors</li><li>Intrusion Sets</li></ul>',
            'category_id' => 1,
            'created_at' => '2023-09-02 22:01:05',
            'updated_at' => '2023-09-02 22:01:05',
            'rating' => 8,
            'owner' => 2,
            'price' => 10,
            'download' => 'j1dasfjei98c120bef52283cq08b.json',
            'status' => 'TR',
            'options' => '["option-1", "option-5"]',
            'picture' => ''
        ]);



        DB::table('items')->insert([
            'id' => 3,
            'name' => 'Malicious URL',
            'excerpt' => '',
            'description' => '<p>Malicious URL</p><ul><li>backdoor piece of malware associated with the URL</li><li>site has been shown to host this backdoor malware</li><li>malware has been known to download remote files</li></ul>',
            'category_id' => 1,
            'created_at' => '2023-1-08 13:06:55',
            'updated_at' => '2023-1-08 13:06:55',
            'rating' => 8,
            'owner' => 1,
            'price' => 2,
            'download' => 'ky2jtea6rxcmfpxanmv5vrbhi6l8ccs6.json',
            'status' => 'IoC',
            'options' => '["option-1"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 4,
            'name' => 'Malware Indicator for File Hash',
            'excerpt' => '',
            'description' => '<p>simple indicator that represents a pattern for a file with a given hash and the context that if a file with that hash is seen it might indicate a sample of Poison Ivy is present</p>',
            'category_id' => 1,
            'created_at' => '2023-03-13 18:05:15',
            'updated_at' => '2023-03-13 18:05:15',
            'rating' => 7,
            'owner' => 2,
            'price' => 2,
            'download' => '0dgw07es44wrh7a1aqewy78wytzqfeka.json',
            'status' => 'IoC',
            'options' => '["option-1"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 5,
            'name' => 'Sighting of IoC',
            'excerpt' => '',
            'description' => '<p>two cyber threat companies, Alpha and Beta, who share threat intelligence</p><ul><li>malicious URL was seen on Alpha’s network</li><li> Alpha shares this IoC with company Beta</li><li>Beta creates a sighting of this indicator</li></ul>',
            'category_id' => 1,
            'created_at' => '2023-9-02 20:03:05',
            'updated_at' => '2023-9-02 20:03:05',
            'rating' => 8,
            'owner' => 1,
            'price' => 1,
            'download' => 'dcvr57lsxeiywrhdaiflfsl5505e0fa5.json',
            'status' => 'IoC',
            'options' => '["option-1"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 6,
            'name' => 'Threat Actor Bravo',
            'excerpt' => '',
            'description' => '<p>threat actor known as “Adversary Bravo”. Adversary Bravo is known to use phishing attacks to deliver remote access malware to the targets. The malware variety they typically use is a variant on the Poison Ivy malware.</p>',
            'category_id' => 2,
            'created_at' => '2023-07-18 17:01:40',
            'updated_at' => '2023-07-18 17:01:40',
            'rating' => 10,
            'owner' => 2,
            'price' => 6,
            'download' => '3siorfnrs8rr5qsu5zauhu91it0dw0pt.json',
            'status' => 'TR',
            'options' => '["option-1", "option-2"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 7,
            'name' => 'ThreatReport APT1',
            'excerpt' => '',
            'description' => '<p>This in-depth threat report focuses on a sophisticated advanced persistent threat simply called “APT1”. Mandiant concluded that this extensive APT conducted cyber espionage campaigns potentially with sponsorship by the Chinese government. Within the STIX 2 JSON for this report, there are several Campaign, Threat Actor, Indicator, Attack Pattern and Malware objects, as well as an Intrusion Set SDO used to model APT1. Along with these SDOs, there are multiple relationships linking these objects together.</p>',
            'category_id' => 2,
            'created_at' => '2023-10-31 09:23:45',
            'updated_at' => '2023-10-31 09:23:45',
            'rating' => 10,
            'owner' => 2,
            'price' => 300,
            'download' => 'bekqy6zs2qnt1afsofzj518lyufxpdef.json',
            'status' => 'TR',
            'options' => '["option-1", "option-2", "option-8", "option-10", "option-13"]',
            'picture' => '']);


        DB::table('items')->insert([
            'id' => 8,
            'name' => 'ThreatReport Poison Ivy',
            'excerpt' => '',
            'description' => '<p>This threat report on Poison Ivy covers how this remote access tool (RAT) was used by different campaigns and threat actors. In this converted report, there are several variants of PIVY malware represented by the Malware SDO, as well as Campaign, Threat Actor, Attack Pattern, and Vulnerability objects. Relationship SROs help link the malware variants to the campaigns and threat actors and demonstrate the vulnerabilities PIVY exploits.</p>',
            'category_id' => 2,
            'created_at' => '2023-08-01 23:07:34',
            'updated_at' => '2023-08-05 14:00:12',
            'rating' => 9,
            'owner' => 2,
            'price' => 250,
            'download' => 'srdc0s7hgx75ri5vrgp0pqzzwhtpmbmu.json',
            'status' => 'TR',
            'options' => '["option-1", "option-9", "option-14"]',
            'picture' => '']);


        DB::table('items')->insert([
            'id' => 9,
            'name' => 'Threat Report DDoS',
            'excerpt' => '',
            'description' => '<p>This report discusses the Chinese IMDDOS botnet. For this report, several OASIS CTI-TC team members came up with solutions. This conversion to STIX 2.1 models Indicator, Malware, and Threat Actor SDOs, along with the corresponding Relationship objects linking them together.</p>',
            'category_id' => 2,
            'created_at' => '2023-04-05 19:06:05',
            'updated_at' => '2023-04-05 19:06:05',
            'rating' => 9,
            'owner' => 2,
            'price' => 120,
            'download' => 'm793qooke2p9k4telc6amqqmmoxik6qx.json',
            'status' => 'TR',
            'options' => '["option-1", "option-10"]',
            'picture' => '']);


        DB::table('items')->insert([
            'id' => 10,
            'name' => 'Malicious IP address',
            'excerpt' => '',
            'description' => '<p>Indicator for a known malicious IP address with Port & Protocol</p>',
            'category_id' => 1,
            'created_at' => '2023-10-03 22:01:05',
            'updated_at' => '2023-10-03 22:01:05',
            'rating' => 10,
            'owner' => 1,
            'price' => 5,
            'download' => 'ra3852mg1w250ofzl4xpkzyncuyu9cko.json',
            'status' => 'IoC',
            'options' => '["option-1"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 11,
            'name' => 'Malicious IP address',
            'excerpt' => '',
            'description' => '<p>Indicator for a known malicious domain with specific subdomain</p>',
            'category_id' => 1,
            'created_at' => '2023-02-10 18:31:02',
            'updated_at' => '2023-02-11 20:11:06',
            'rating' => 10,
            'owner' => 2,
            'price' => 3,
            'download' => 'e3gv7dvmcrxykefui3ypv14op250u3vb.json',
            'status' => 'IoC',
            'options' => '["option-1"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 12,
            'name' => 'File Hash (SHA256) and File Name',
            'excerpt' => '',
            'description' => '<p>Indicator for a known malicious file SHA256 hash</p>',
            'category_id' => 1,
            'created_at' => '2023-05-10 16:21:06',
            'updated_at' => '2023-05-10 16:21:06',
            'rating' => 4,
            'owner' => 2,
            'price' => 7,
            'download' => 'xtjfsx22q3tqou0dtylfizud3ahomj6i.json',
            'status' => 'IoC',
            'options' => '["option-1"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 13,
            'name' => 'Suspicious URL with Specific Path',
            'excerpt' => '',
            'description' => '<p>Indicator for a suspicious URL</p>',
            'category_id' => 1,
            'created_at' => '2023-05-10 16:21:06',
            'updated_at' => '2023-05-10 16:21:06',
            'rating' => 8,
            'owner' => 2,
            'price' => 2,
            'download' => 'tevi81uwacvwi4obeyuqdgl2yj8yys80.json',
            'status' => 'IoC',
            'options' => '["option-2"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 14,
            'name' => 'Malicious Registry Key Indicator',
            'excerpt' => '',
            'description' => '<p>Indicator for a known malicious Windows Registry key</p>',
            'category_id' => 1,
            'created_at' => '2023-06-28 06:21:06',
            'updated_at' => '2023-06-28 06:21:06',
            'rating' => 10,
            'owner' => 2,
            'price' => 10,
            'download' => 'ic7ddf1j5szesr1ryra150ui7uh3q2a9.json',
            'status' => 'IoC',
            'options' => '["option-1"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 15,
            'name' => 'Suspicious Email Attachment Indicator',
            'excerpt' => '',
            'description' => '<p>Suspicious Email Attachment Indicator</p>',
            'category_id' => 1,
            'created_at' => '2023-08-01 15:56:16',
            'updated_at' => '2023-08-01 15:56:16',
            'rating' => 3,
            'owner' => 2,
            'price' => 2,
            'download' => 'x978qscz7buxeuqt2uvjivhs84nrp6dr.json',
            'status' => 'IoC',
            'options' => '["option-2"]',
            'picture' => ''
        ]);

        DB::table('items')->insert([
            'id' => 16,
            'name' => 'Threat Report SQL Injection',
            'excerpt' => '',
            'description' => '<p>Six IoCs for SQL Injections</p>',
            'category_id' => 2,
            'created_at' => '2023-10-05 16:58:00',
            'updated_at' => '2023-10-06 15:58:00',
            'rating' => 8,
            'owner' => 2,
            'price' => 10,
            'download' => 'uemjsvhlrgq3z7r9t86uxc0gasxin5x2.json',
            'status' => 'TR',
            'options' => '["option-2"]',
            'picture' => ''
        ]);

        DB::table('items')->insert([
            'id' => 17,
            'name' => 'Threat Report Zero Day',
            'excerpt' => '',
            'description' => '<p>CISA obtained 14 malware samples comprised of Barracuda exploit payloads and reverse shell backdoors</p><ul><li>The malware was used by threat actors exploiting CVE-2023-2868, a former zero-day vulnerability affecting versions 5.1.3.001-9.2.0.006 of Barracuda Email Security Gateway (ESG)</li><li> The payload triggers a command injection (exploiting CVE-2023-2868), leading to dropping and execution of reverse shells on the ESG appliance. </li><li>The reverse shells establish backdoor communications via OpenSSL with threat actor command and control (C2) servers.</li><li>The actors delivered this payload to the victim via a phishing email with a malicious .tar attachment.</li></ul>',
            'category_id' => 2,
            'created_at' => '2023-09-10 07:39:00',
            'updated_at' => '2023-09-10 07:39:00',
            'rating' => 9,
            'owner' => 2,
            'price' => 160,
            'download' => 'u8xgfyqpd3kumhddexjbesxdyo2gyico.json',
            'status' => 'TR',
            'options' => '["option-7", "option-2"]',
            'picture' => ''
        ]);

        DB::table('items')->insert([
            'id' => 18,
            'name' => 'IoC Bundle',
            'excerpt' => '',
            'description' => '<p>CISA received 4 files for analysis from an incident response engagement conducted at an Aeronautical Sector organization. CISA has provided indicators of compromise (IOCs).</p>',
            'category_id' => 2,
            'created_at' => '2023-07-05 13:55:00',
            'updated_at' => '2023-07-05 13:55:00',
            'rating' => 8,
            'owner' => 2,
            'price' => 55,
            'download' => '08q7iuq9gm7y2gthndpyx28xc39y95d2.json',
            'status' => 'IoC',
            'options' => '["option-1", "option-4"]',
            'picture' => ''
        ]);

        DB::table('items')->insert([
            'id' => 19,
            'name' => 'Threat Report on detected Malware',
            'excerpt' => '',
            'description' => '<p>This artifact is a variant of the TrueBot downloader. The file is padded with over one gigabyte (Gb) of junk code, designed to hinder analysis. When the bot is executed on the system, it will check the current Operating System (OS) version (RtlGetVersion) and the processor architecture (GetNativeSystemInfo).  From this information the bot will create a unique ID for the compromised system. It will store the ID in C:\\ProgramData as a randomly named 13 character file with a .JSONIP extension, e.g. \u2018IgtyXEQuCEvAM.JSONIP\u2019.\r\n\r\n The malware proceeds to enumerate all running processes on the system. The bot configuration contains a list of common Windows processes that are excluded from its list. The remaining process names are concatenated into a base64 encoded string.</p>',
            'category_id' => 2,
            'created_at' => '2023-04-19 18:28:00',
            'updated_at' => '2023-04-19 18:28:00',
            'rating' => 9,
            'owner' => 1,
            'price' => 25,
            'download' => '1husj3siu4qrkpryxxw2xaupyg8u7gl4.json',
            'status' => 'TR',
            'options' => '["option-8", "option-1"]',
            'picture' => ''
        ]);

        DB::table('items')->insert([
            'id' => 20,
            'name' => 'Threat Report Ransom',
            'excerpt' => '',
            'description' => '<p>The Federal Bureau of Investigation (FBI) and the Cybersecurity and Infrastructure Security Agency (CISA) are releasing this joint CSA to disseminate known ransomware IOCs and TTPs associated with the Snatch ransomware variant identified through FBI investigations as recently as June 1, 2023.\n\nSince mid-2021, Snatch threat actors have consistently evolved their tactics to take advantage of current trends in the cybercriminal space and leveraged successes of other ransomware variants</p><ul><li>Snatch threat actors have targeted a wide range of critical infrastructure sectors including the Defense Industrial Base (DIB), Food and Agriculture, and Information Technology sectors</li><li>Snatch threat actors conduct ransomware operations involving data exfiltration and double extortion. After data exfiltration often involving direct communications with victims demanding ransom, Snatch threat actors may threaten victims with double extortion, where the victims data will be posted on Snatch extortion blog if the ransom goes unpaid.</li></ul>',
            'category_id' => 2,
            'created_at' => '2023-03-10 16:58:00',
            'updated_at' => '2023-03-10 16:58:00',
            'rating' => 8,
            'owner' => 2,
            'price' => 10,
            'download' => 'uemjsvhlrgq3z7r9t86uxc0gasxin5x2.json',
            'status' => 'TR',
            'options' => '["option-2"]',
            'picture' => ''
        ]);

        DB::table('items')->insert([
            'id' => 21,
            'name' => 'Ransom Malware QakBot',
            'excerpt' => '',
            'description' => '<p>The Cybersecurity and Infrastructure Security Agency (CISA) and Federal Bureau of Investigation (FBI) are releasing this joint Cybersecurity Advisory (CSA) to disseminate QakBot infrastructure indicators of compromise (IOCs) identified through FBI investigations as of August 2023. On August 25, FBI and international partners executed a coordination operation to disrupt QakBot infrastructure worldwide. Disruption operations targeting QakBot infrastructure resulted in the botnet takeover, which severed the connection between victim computers and QakBot command and control (C2) servers.</p>',
            'category_id' => 2,
            'created_at' => '2023-02-05 16:58:00',
            'updated_at' => '2023-02-05 16:58:00',
            'rating' => 9,
            'owner' => 2,
            'price' => 30,
            'download' => 'cx2ndopm51arh6y0987hctigexx78geg.json',
            'status' => 'IoC',
            'options' => '["option-3"]',
            'picture' => ''
        ]);

        DB::table('items')->insert([
            'id' => 22,
            'name' => 'TR RCE',
            'excerpt' => '',
            'description' => '<p>exploitation of CVE-2023-3519</p><ul><li>unauthenticated remote code execution (RCE) vulnerability affecting NetScaler (formerly Citrix) Application Delivery Controller (ADC) and NetScaler Gateway</li><li>threat actors exploited this vulnerability as a zero-day to drop a webshell on a critical infrastructure organization’s non-production environment NetScaler ADC appliance</li><li>The webshell enabled the actors to perform discovery on the victim’s active directory (AD) and collect and exfiltrate AD data</li></ul>',
            'category_id' => 2,
            'created_at' => '2023-01-15 12:38:00',
            'updated_at' => '2023-01-15 12:38:00',
            'rating' => 7,
            'owner' => 2,
            'price' => 15,
            'download' => 'zw09r5xx2210plbxo6q9jb4i68oc8uyg.json',
            'status' => 'TR',
            'options' => '["option-7", "option-4"]',
            'picture' => ''
        ]);

        DB::table('items')->insert([
            'id' => 23,
            'name' => 'IoCs Webshell PHP',
            'excerpt' => '',
            'description' => '<p>CISA received three files for analysis. The files included three webshells written in PHP: Hypertext Preprocessor (PHP), Active Server Pages Extended (ASPX), and .NET Dynamic-Link Library (DLL).</p><ul><li>The sample is highly obfuscated and uses rot13 algorithm, zlib for compression and base64 encoding for obfuscation</li><li>The \u201cosker.aspx\u201d webshell code was padded with junk code. The .NET DLL webshell is a .NET compiled version of osker.aspx</li><li>The samples are interactive webshells and have the ability to upload and manage files, create directories and files, and execute commands on the target machine</li></ul>',
            'category_id' => 1,
            'created_at' => '2023-06-29 16:18:00',
            'updated_at' => '2023-06-29 16:18:00',
            'rating' => 9,
            'owner' => 1,
            'price' => 12,
            'download' => 'fjts1gts2x3e0uyt0chgf8wcx6s7higj.json',
            'status' => 'IoC',
            'options' => '["option-11", "option-14"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 24,
            'name' => 'IoC BianLian Ransomware Breach',
            'excerpt' => '',
            'description' => '<p>This STIX file provides indicators of compromise (IOCs) associated with malicious activity reported in CISA Joint Cybersecurity Advisory</p><ul><li>The advisory aims to disseminate the latest information on the known BianLian ransomware and data extortion group IOCs and TTPs, which were identified through FBI and ACSC investigations as of March 2023</li><li>BianLian is a ransomware operation that first appeared in the wild in July 2022, successfully breaching multiple high-profile organizations</li><li>The group has also targeted multiple American as well as Australian critical infrastructure sectors</li></ul>',
            'category_id' => 1,
            'created_at' => '2023-01-05 12:08:00',
            'updated_at' => '2023-01-05 12:08:00',
            'rating' => 6,
            'owner' => 2,
            'price' => 23,
            'download' => '07l5zhmpuqr7bea2v3l76gi9dlfz57r9.json',
            'status' => 'IoC',
            'options' => '["option-3", "option-8"]',
            'picture' => ''
        ]);

        DB::table('items')->insert([
            'id' => 25,
            'name' => 'IoC SEASPY WHIRLPOOL',
            'excerpt' => '',
            'description' => '<p>Four malware samples - including SEASPY and WHIRLPOOL backdoors</p><ul><li>The device was compromised by threat actors exploiting CVE-2023-2868, a former zero-day vulnerability affecting versions 5.1.3.001-9.2.0.006 of Barracuda Email Security Gateway (ESG)</li></ul>',
            'category_id' => 1,
            'created_at' => '2023-03-04 20:11:00',
            'updated_at' => '2023-03-04 20:11:00',
            'rating' => 8,
            'owner' => 1,
            'price' => 37,
            'download' => 'g50gnkhwk1o1xa9gtv0p8v5l1sahily0.json',
            'status' => 'IoC',
            'options' => '["option-1", "option-7"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 26,
            'name' => 'Threat Report Ivanti',
            'excerpt' => '',
            'description' => '<p>Advanced persistent threat (APT) actors exploited CVE-2023-35078 as a zero day from at least April 2023 through July 2023 to gather information from several Norwegian organizations, as well as to gain access to and compromise a Norwegian government agency’s network.</p>',
            'category_id' => 2,
            'created_at' => '2023-05-20 11:43:00',
            'updated_at' => '2023-05-20 11:43:00',
            'rating' => 10,
            'owner' => 2,
            'price' => 250,
            'download' => 'e5nfjyorcx89dlsctbj24p9w20dwuxn6.json',
            'status' => 'TR',
            'options' => '["option-12", "option-11", "option-14"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 27,
            'name' => 'IoC SUBMARINE',
            'excerpt' => '',
            'description' => '<p>CISA obtained seven malware samples related to a novel backdoor CISA has named SUBMARINE. The malware was used by threat actors exploiting CVE-2023-2868, a former zero-day vulnerability affecting certain versions 5.1.3.001 - 9.2.0.006 of Barracuda Email Security Gateway (ESG)</p><ul><li>SUBMARINE is a novel persistent backdoor that lives in a Structured Query Language (SQL) database on the ESG appliance. SUBMARINE comprises multiple artifacts that, in a multi-step process, enable execution with root privileges, persistence, command and control, and cleanup. In addition to SUBMARINE, CISA obtained associated Multipurpose Internet Mail Extensions (MIME) attachment files from the victim. These files contained the contents of the compromised SQL database, which included sensitive information</li></ul>',
            'category_id' => 1,
            'created_at' => '2023-08-01 16:58:00',
            'updated_at' => '2023-08-01 16:58:00',
            'rating' => 9,
            'owner' => 2,
            'price' => 70,
            'download' => 'rkl4ha4udvbgnid8aijjyk45miv4ui3a.json',
            'status' => 'IoC',
            'options' => '["option-1", "option-7"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 28,
            'name' => 'Threat Report SQL Injection',
            'excerpt' => '',
            'description' => '<p>CISA obtained 14 malware samples comprised of Barracuda exploit payloads and reverse shell backdoors</p><ul><li>The malware was used by threat actors exploiting CVE-2023-2868, a former zero-day vulnerability affecting versions 5.1.3.001-9.2.0.006 of Barracuda Email Security Gateway (ESG)</li><li>The payload triggers a command injection (exploiting CVE-2023-2868), leading to dropping and execution of reverse shells on the ESG appliance.</li><li>The reverse shells establish backdoor communications via OpenSSL with threat actor command and control (C2) servers. The actors delivered this payload to the victim via a phishing email with a malicious .tar attachment</li></ul>',
            'category_id' => 2,
            'created_at' => '2023-02-26 15:28:00',
            'updated_at' => '2023-02-26 15:28:00',
            'rating' => 6,
            'owner' => 2,
            'price' => 190,
            'download' => '2qliqn3v8qlv5tqmdi57w4vutjddzmys.json',
            'status' => 'TR',
            'options' => '["option-2", "option-1", "option-7"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 29,
            'name' => 'IoC Backdoor Exploit',
            'excerpt' => '',
            'description' => '<p>CISA obtained five malware samples - including artifacts related to SUBMARINE, SKIPJACK, SEASPRAY, WHIRLPOOL, and SALTWATER backdoors. The device was compromised by threat actors exploiting CVE-2023-2868, a former zero-day vulnerability affecting versions 5.1.3.001-9.2.0.006 of Barracuda Email Security Gateway (ESG).</p>',
            'category_id' => 1,
            'created_at' => '2023-09-15 16:58:00',
            'updated_at' => '2023-09-15 16:58:00',
            'rating' => 8,
            'owner' => 2,
            'price' => 10,
            'download' => 'zmxu9ocfpj2evx9eeja0pci8c0ockd5m.json',
            'status' => 'IoC',
            'options' => '["option-2", "option-1", "option-7"]',
            'picture' => ''
        ]);

        DB::table('items')->insert([
            'id' => 30,
            'name' => 'Threat Report Sandworm',
            'excerpt' => '',
            'description' => '<p>actor known as Sandworm has used a new mobile malware in a campaign targeting Android devices used by the Ukrainian military</p><ul><li>The malware is referred to here as Infamous Chisel</li><li></li><li></li></ul>',
            'category_id' => 2,
            'created_at' => '2023-08-09 16:58:00',
            'updated_at' => '2023-08-09 16:58:00',
            'rating' => 9,
            'owner' => 1,
            'price' => 80,
            'download' => 'l3ac2nu7sii0t1tm4mlvos4iel4jy8ej.json',
            'status' => 'TR',
            'options' => '["option-2", "option-1", "option-9", "option-10", "option-15"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 31,
            'name' => 'IoC Whirpool',
            'excerpt' => '',
            'description' => '<p>CISA obtained a variant of the WHIRLPOOL backdoor. The malware was used by threat actors exploiting CVE-2023-2868, a former zero-day vulnerability affecting versions 5.1.3.001-9.2.0.006 of Barracuda Email Security Gateway (ESG)</p><ul><li>WHIRLPOOL is a backdoor that establishes a Transport Layer Security (TLS) reverse shell to the Command-and-Control (C2) server</li></ul>',
            'category_id' => 1,
            'created_at' => '2023-05-21 11:13:00',
            'updated_at' => '2023-05-21 11:13:00',
            'rating' => 7,
            'owner' => 2,
            'price' => 43,
            'download' => 'uemjsvhlrgq3z7r9t86uxc0gasxin5x2.json',
            'status' => 'IoC',
            'options' => '["option-1", "option-16", "option-14"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 32,
            'name' => 'IoC IP Attacker Hosts',
            'excerpt' => '',
            'description' => '<p>IPV4 hosts detected attempting to attack SSH on private honeypot</p>',
            'category_id' => 1,
            'created_at' => '2023-09-21 14:43:00',
            'updated_at' => '2023-09-21 14:43:00',
            'rating' => 10,
            'owner' => 2,
            'price' => 25,
            'download' => '6wo2tthbb3lvrxcl8t5l0ob0ztpvxkqz.json',
            'status' => 'IoC',
            'options' => '["option-6", "option-13"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 33,
            'name' => 'IoC Brute Force',
            'excerpt' => '',
            'description' => '<p>IPV4 hosts detected attempting to brute force MSSQL on private honeypot</p>',
            'category_id' => 1,
            'created_at' => '2023-06-21 14:43:00',
            'updated_at' => '2023-06-21 14:43:00',
            'rating' => 9,
            'owner' => 2,
            'price' => 17,
            'download' => '4y46j8kn896m4b4z505fo03hix1q7svk.json',
            'status' => 'TR',
            'options' => '["option-13"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 34,
            'name' => 'IoC SIP Attack',
            'excerpt' => '',
            'description' => '<p>PV4 hosts detected attempting to attack SIP on private honeypot</p>',
            'category_id' => 1,
            'created_at' => '2023-06-12 07:58:00',
            'updated_at' => '2023-06-12 07:58:00',
            'rating' => 8,
            'owner' => 2,
            'price' => 13,
            'download' => 'bgsfrxy8icx9qsoroh3r5jpltep7e5xa.json',
            'status' => 'IoC',
            'options' => '["option-9", "option-10"]',
            'picture' => ''
        ]);


        DB::table('items')->insert([
            'id' => 35,
            'name' => 'IoC Malware Phishing List',
            'excerpt' => '',
            'description' => '<p>Malware Filter - Phishing List</p><ul><li>Hostnames</li><li>Domains</li></ul>',
            'category_id' => 1,
            'created_at' => '2023-05-10 08:38:00',
            'updated_at' => '2023-05-10 08:38:00',
            'rating' => 9,
            'owner' => 2,
            'price' => 140,
            'download' => 'g1iqodnof6kx37snbv87g08p4wmdsalm.json',
            'status' => 'IoC',
            'options' => '["option-2"]',
            'picture' => ''
        ]);

        /*DB::table('item_tag')->insert([
            'item_id' => 1,
            'tag_id' => 1
        ]);
        DB::table('item_tag')->insert([
            'item_id' => 1,
            'tag_id' => 2
        ]);
        DB::table('item_tag')->insert([
            'item_id' => 2,
            'tag_id' => 3
        ]);

        DB::table('item_tag')->insert([
            'item_id' => 3,
            'tag_id' => 1
        ]);
        DB::table('item_tag')->insert([
            'item_id' => 3,
            'tag_id' => 2
        ]);
        DB::table('item_tag')->insert([
            'item_id' => 3,
            'tag_id' => 3
        ]);*/

        //-------------------------------------------------------------------------------------

        DB::table('settings')->insert([
            'user_id' => 1,
            'balance' => 3950,
            'subscription' => 500,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /*DB::table('purchases')->insert([
            'item_id' => 1,
            'user_id' => 1,
            'price' => 550,
            'created_at' => now(),
            'updated_at' => now()
        ]);*/
        /*Sales start*/
        DB::table('purchases')->insert([
            'item_id' => 5,
            'user_id' => 2,
            'price' => 1,
            'created_at' => '2023-09-21 14:43:00',
            'updated_at' => '2023-09-21 14:43:00'
        ]);
        DB::table('purchases')->insert([
            'item_id' => 10,
            'user_id' => 2,
            'price' => 5,
            'created_at' => '2023-10-09 20:20:00',
            'updated_at' => '2023-10-09 20:20:00'
        ]);
        DB::table('purchases')->insert([
            'item_id' => 19,
            'user_id' => 2,
            'price' => 25,
            'created_at' => '2023-08-17 10:10:00',
            'updated_at' => '2023-08-17 10:10:00'
        ]);
        DB::table('purchases')->insert([
            'item_id' => 23,
            'user_id' => 2,
            'price' => 12,
            'created_at' => '2023-07-01 14:00:00',
            'updated_at' => '2023-07-01 14:00:00'
        ]);
        DB::table('purchases')->insert([
            'item_id' => 25,
            'user_id' => 2,
            'price' => 37,
            'created_at' => '2023-03-10 08:30:00',
            'updated_at' => '2023-03-10 08:30:00'
        ]);
        /*Sales end*/
        /*Purchases start*/
        DB::table('purchases')->insert([
            'item_id' => 2,
            'user_id' => 1,
            'price' => 10,
            'created_at' => '2023-09-21 14:43:00',
            'updated_at' => '2023-09-21 14:43:00'
        ]);
        DB::table('purchases')->insert([
            'item_id' => 4,
            'user_id' => 1,
            'price' => 2,
            'created_at' => '2023-07-15 09:30:00',
            'updated_at' => '2023-07-15 09:30:00'
        ]);
        DB::table('purchases')->insert([
            'item_id' => 8,
            'user_id' => 1,
            'price' => 250,
            'created_at' => '2023-08-29 11:57:00',
            'updated_at' => '2023-08-29 11:57:00'
        ]);
        DB::table('purchases')->insert([
            'item_id' => 16,
            'user_id' => 1,
            'price' => 10,
            'created_at' => '2023-10-14 16:21:00',
            'updated_at' => '2023-10-14 16:21:00'
        ]);
        DB::table('purchases')->insert([
            'item_id' => 17,
            'user_id' => 1,
            'price' => 160,
            'created_at' => '2023-10-09 16:58:00',
            'updated_at' => '2023-10-09 16:58:00'
        ]);
        DB::table('purchases')->insert([
            'item_id' => 20,
            'user_id' => 1,
            'price' => 10,
            'created_at' => '2023-03-18 14:55:00',
            'updated_at' => '2023-03-18 14:55:00'
        ]);
        DB::table('purchases')->insert([
            'item_id' => 24,
            'user_id' => 1,
            'price' => 23,
            'created_at' => '2023-10-30 13:15:00',
            'updated_at' => '2023-10-30 13:15:00'
        ]);
        DB::table('purchases')->insert([
            'item_id' => 27,
            'user_id' => 1,
            'price' => 70,
            'created_at' => '2023-08-15 19:58:00',
            'updated_at' => '2023-08-15 19:58:00'
        ]);
        /*Purchases end*/

        /*DB::table('reviews')->insert([
            'item_id' => 1,
            'user_id' => 2,
            'review' => 10,
            'description' => "The best CTI I have ever seen",
            'created_at' => now(),
            'updated_at' => now()
        ]);*/
        DB::table('reviews')->insert([
            'item_id'=> 2,
            'user_id'=> 1,
            'review'=> 8,
            'description'=> 'Impressed by the exceptional quality of data provided here.',
            'created_at'=> '2023-09-21 14=>43=>00',
            'updated_at'=> '2023-09-21 14=>43=>00'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 4,
            'user_id'=> 1,
            'review'=> 10,
            'description'=> 'Breathtakingly superb Cyber Threat Intelligence data that sets the standard.',
            'created_at'=> '2023-07-15 09=>30=>00',
            'updated_at'=> '2023-07-15 09=>30=>00'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 8,
            'user_id'=> 1,
            'review'=> 6,
            'description'=> 'The quality of the CTI data is quite impressive, offering valuable insights.',
            'created_at'=> '2023-08-29 11=>57=>00',
            'updated_at'=> '2023-08-29 11=>57=>00'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 16,
            'user_id'=> 1,
            'review'=> 10,
            'description'=> 'Top-notch data that surpasses expectations in every way.',
            'created_at'=> '2023-10-14 16=>21=>00',
            'updated_at'=> '2023-10-14 16=>21=>00'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 17,
            'user_id'=> 1,
            'review'=> 10,
            'description'=> 'Outstanding Cyber Threat Intelligence data, making it a leader in the field.',
            'created_at'=> '2023-10-09 16=>58=>00',
            'updated_at'=> '2023-10-09 16=>58=>00'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 20,
            'user_id'=> 1,
            'review'=> 8,
            'description'=> 'Exceptionally top-notch Cyber Threat Intelligence data that stands out.',
            'created_at'=> '2023-03-18 14=>55=>00',
            'updated_at'=> '2023-03-18 14=>55=>00'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 24,
            'user_id'=> 1,
            'review'=> 8,
            'description'=> 'Providing superb data that impresses at every turn.',
            'created_at'=> '2023-10-30 13=>15=>00',
            'updated_at'=> '2023-10-30 13=>15=>00'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 27,
            'user_id'=> 1,
            'review'=> 8,
            'description'=> 'Offering impressive data with valuable insights.',
            'created_at'=> '2023-08-15 19=>58=>00',
            'updated_at'=> '2023-08-15 19=>58=>00'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 1,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'In-depth analysis using this Cyber Threat Intelligence data provided valuable insights for our security team.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 2,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'Our cybersecurity strategy was enhanced with the help of this Cyber Threat Intelligence data, which delivered comprehensive threat intelligence.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 3,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'We trust this source for its exceptional Cyber Threat Intelligence data, which consistently surpasses our expectations.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 4,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'We were impressed by the quality of the threat data provided, which proved invaluable in our incident response efforts.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 5,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'This Cyber Threat Intelligence data is second to none and a key asset in our security operations, providing comprehensive coverage.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 6,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'The Cyber Threat Intelligence data provided insights that helped us understand emerging threats and vulnerabilities, enhancing our preparedness.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 7,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'This source consistently delivers outstanding Cyber Threat Intelligence data, setting the gold standard for our threat intelligence needs.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 8,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Our threat hunters rely on this source\'s superb Cyber Threat Intelligence data to identify and mitigate risks effectively.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 9,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'We found this Cyber Threat Intelligence data to be insightful and practical, helping us make informed security decisions.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 10,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'This source excels in providing exceptional Cyber Threat Intelligence data, making it a top choice for threat intelligence professionals.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 11,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'We were consistently impressed by the quality of the Cyber Threat Intelligence data, which helped us stay ahead of emerging threats.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 12,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'The insights from this Cyber Threat Intelligence data allowed us to detect vulnerabilities and enhance our security posture.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 13,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'This exceptional source has set a new standard in providing Cyber Threat Intelligence data, making it indispensable for our security operations.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 14,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'This source\'s impressively insightful Cyber Threat Intelligence data has become a crucial part of our security arsenal.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 15,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'The industry-leading Cyber Threat Intelligence data offered by this source empowers our security team to respond effectively to evolving threats.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 16,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Our security strategy benefited greatly from this Cyber Threat Intelligence data, providing us with critical insights.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 17,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'This Cyber Threat Intelligence data source played a crucial role in our threat detection and mitigation efforts, helping us stay secure.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 18,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'We found this source to consistently deliver exceptional Cyber Threat Intelligence data, setting a benchmark for others to follow.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 19,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'This Cyber Threat Intelligence data source stood out with its high-quality insights and comprehensive threat coverage.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 20,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'Our security operations greatly benefited from this source\'s top-tier Cyber Threat Intelligence data, enabling us to respond effectively to emerging threats.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 21,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'The insights from this Cyber Threat Intelligence data source were highly valuable in enhancing our security posture and threat detection capabilities.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 22,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'We rely on this source for its outstanding Cyber Threat Intelligence data, making it a top choice for threat intelligence professionals.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 23,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'This source\'s superb Cyber Threat Intelligence data is indispensable in our security toolkit, helping us identify and mitigate risks effectively.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 24,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'The insights from this Cyber Threat Intelligence data source have been instrumental in understanding vulnerabilities and threats, enhancing our security posture.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10=>11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 25,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'This source has set a new standard in providing exceptional Cyber Threat Intelligence data, earning our trust for its invaluable insights.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10=>11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 26,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Our security team was consistently impressed by the quality and insights of the Cyber Threat Intelligence data from this source.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10=>11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 27,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'This Cyber Threat Intelligence data source has provided highly valuable insights for our security decision-making and threat mitigation efforts.',
            'created_at'=> '2023-10=>11 12=>34=>56',
            'updated_at'=> '2023-10=>11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 28,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'This source\'s exceptional Cyber Threat Intelligence data consistently exceeds expectations and plays a pivotal role in our security operations.',
            'created_at'=> '2023-10=>11 12=>34=>56',
            'updated_at'=> '2023-10=>11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 29,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Our organization values the impressive insights and threat coverage offered by this source\'s Cyber Threat Intelligence data.',
            'created_at'=> '2023-10=>11 12=>34=>56',
            'updated_at'=> '2023-10=>11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 30,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'We have relied on this source\'s Cyber Threat Intelligence data to enhance our security posture and understand emerging threats effectively.',
            'created_at'=> '2023-10=>11 12=>34=>56',
            'updated_at'=> '2023-10=>11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 31,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'Our security team was consistently impressed by the quality and comprehensiveness of the Cyber Threat Intelligence data from this source.',
            'created_at'=> '2023-10=>11 12=>34=>56',
            'updated_at'=> '2023-10=>11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 32,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'This source\'s high-quality Cyber Threat Intelligence data has proven invaluable for our threat detection and incident response efforts.',
            'created_at'=> '2023-10=>11 12=>34=>56',
            'updated_at'=> '2023-10=>11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 33,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'We rely on this source\'s Cyber Threat Intelligence data for its insightful and practical insights into emerging threats and vulnerabilities.',
            'created_at'=> '2023-10=>11 12=>34=>56',
            'updated_at'=> '2023-10=>11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 34,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'This source consistently exceeds our expectations, providing exceptional Cyber Threat Intelligence data that is indispensable for our security operations.',
            'created_at'=> '2023-10=>11 12=>34=>56',
            'updated_at'=> '2023-10=>11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 35,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Our team highly values the impressive insights and threat coverage offered by this source\'s Cyber Threat Intelligence data.',
            'created_at'=> '2023-10=>11 12=>34=>56',
            'updated_at'=> '2023-10=>11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 1,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Impressed by the detailed insights from this Cyber Threat Intelligence data source. It\'s been a game-changer for our security operations.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 1,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'Exceptional Cyber Threat Intelligence data that consistently exceeds expectations. A reliable partner in our cybersecurity journey.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 1,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'Insightful Cyber Threat Intelligence data that\'s been valuable in enhancing our security posture. Reliable and cost-effective.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 1,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'The Cyber Threat Intelligence data from this source has consistently provided us with the intelligence needed to stay ahead of threats and vulnerabilities.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 2,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'This Cyber Threat Intelligence data source has been a pillar of strength in our security journey. It offers comprehensive insights and practical solutions.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 2,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'We\'ve been consistently impressed by the robustness of the insights provided by this Cyber Threat Intelligence data source. It\'s a game-changer for us.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 2,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'Insights from this Cyber Threat Intelligence data source have proven invaluable. We\'re better equipped to handle threats and vulnerabilities effectively.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 2,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'This source\'s Cyber Threat Intelligence data consistently impresses, setting a high bar in terms of comprehensive threat intelligence.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 3,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'We rely on this source for its insightful and cost-effective Cyber Threat Intelligence data. It empowers us to make informed security decisions.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 3,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'Outstanding Cyber Threat Intelligence data that consistently delivers valuable insights, setting a gold standard for the industry.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 3,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'The insights from this Cyber Threat Intelligence data source have helped us enhance our security posture. It\'s a reliable partner in our journey.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 3,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'This source\'s cost-effective Cyber Threat Intelligence data has been instrumental in understanding emerging threats and vulnerabilities.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 4,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'This source\'s data has been invaluable for our security efforts. It offers insightful and practical insights, helping us stay ahead of threats.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 4,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'We\'ve been consistently impressed by the depth of the insights provided by this source. It\'s a game-changer for us in the security landscape.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 4,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'This data source has proven to be a cost-effective solution for enhancing our security posture and understanding vulnerabilities, giving us an edge in security.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 4,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'We rely on this source for its exceptional data. It consistently delivers valuable insights that empower our security team and enable us to act swiftly.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 5,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'This source has set a new standard in the industry. It consistently provides comprehensive threat insights that are essential for our security efforts.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 5,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'The insights from this source have been critical in enhancing our security posture and threat detection capabilities, making it a reliable partner for us.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 5,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'We\'ve found this source to be cost-effective and reliable in empowering us to make informed security decisions and stay resilient in the face of threats.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 5,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'Outstanding insights that consistently deliver value, setting a gold standard in the industry. It\'s an essential part of our toolkit for staying secure.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 6,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'We\'ve relied on this source for practical insights into emerging threats and vulnerabilities. It\'s been a cost-effective solution for enhancing our security.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 6,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'This source consistently exceeds our expectations with insights that empower our security team and enable us to act swiftly in the face of evolving threats.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 6,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Our security strategy has greatly benefited from the detailed insights provided by this source, making it a reliable partner in our security journey.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 6,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'Impressed by the insights that have been invaluable for our security efforts, empowering us to respond effectively to evolving threats.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 7,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'This source\'s insights have played a crucial role in strengthening our security posture and understanding vulnerabilities. It\'s a dependable partner in our journey.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 7,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'We\'ve consistently been impressed by the depth of insights provided by this source. It\'s been a game-changer in the security landscape, setting new standards.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 7,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'This data source has proven to be a cost-effective solution in enhancing our security posture and understanding vulnerabilities. It\'s been a reliable partner in our journey to secure our assets.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 8,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'Outstanding insights that consistently deliver value, setting a gold standard in the industry. It\'s an essential part of our toolkit for staying secure.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 8,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'The insights from this source have been critical in enhancing our security posture and threat detection capabilities. It\'s a reliable partner for us.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 8,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'We\'ve found this source to be cost-effective and reliable in empowering us to make informed security decisions and stay resilient in the face of threats.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 9,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'We\'ve relied on this source for practical insights into emerging threats and vulnerabilities. It\'s been a cost-effective solution for enhancing our security.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 9,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'This source consistently exceeds our expectations with insights that empower our security team and enable us to act swiftly in the face of evolving threats.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 9,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Our security strategy has greatly benefited from the detailed insights provided by this source, making it a reliable partner in our security journey.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 10,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'The insights from this source have consistently set new standards in our security practices. It\'s a trusted partner in our quest for a secure environment.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 10,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'This source\'s insights have played a vital role in strengthening our security posture and understanding vulnerabilities. It\'s a dependable partner in our journey.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 10,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'We\'ve found this source to be cost-effective and reliable in empowering us to make informed security decisions and stay resilient in the face of threats.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 11,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'This source\'s insights have been instrumental in helping us understand emerging threats and vulnerabilities. It\'s a cost-effective solution for enhancing our security.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 11,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'Consistently exceeding our expectations, this source\'s insights empower our security team to act swiftly in the face of evolving threats. It\'s an essential part of our toolkit.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 12,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Reliable and effective source for our security needs.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 12,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'Exceptional insights for top-notch security.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 12,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'Cost-effective and informative for our security efforts.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 13,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'Helps us understand security challenges effectively.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 13,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'A solid choice for enhancing security measures.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 13,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'An invaluable asset for our security toolbox.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 14,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'A top choice for security intelligence. Highly recommended.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 14,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Delivers valuable insights consistently.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 14,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'Cost-effective solution for security enhancement.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 15,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'A valuable tool for security awareness and management.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 15,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Reliable and informative for staying secure.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 15,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'Helps us make confident security decisions effortlessly.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 16,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'A reliable source for our security needs, consistently delivering value.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 16,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'Outstanding insights for top-notch security, setting a new standard.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 16,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'A cost-effective and informative solution for our security efforts.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 17,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'A valuable tool for enhancing security awareness and management.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 17,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Reliable and informative, helping us stay secure effectively.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 17,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'Empowering us to make confident security decisions effortlessly.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 18,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'A top choice for security intelligence, highly recommended for staying secure.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 18,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Delivering valuable insights consistently, a trusted partner for our security journey.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 18,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'A cost-effective solution for enhancing our security, giving us the edge we need.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 19,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'Helping us understand security challenges effectively, a valuable asset for our security toolbox.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 19,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Reliable and informative for staying secure, consistently delivering value.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 19,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'Empowering us to make confident security decisions effortlessly, setting new standards in security.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 20,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'This source consistently provides valuable security insights, contributing to our robust defense against cyber threats.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 20,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'Exceptional insights that set new industry standards. An indispensable asset in our pursuit of top-tier security.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 20,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'An invaluable resource for enhancing our security posture, enabling us to proactively tackle emerging threats with confidence.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 21,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'A cost-efficient and trustworthy solution for enhancing our security readiness and decision-making processes.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 21,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Consistently delivers invaluable insights, bolstering our security resilience in a dynamic threat environment.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 21,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'An essential asset in our security toolkit, streamlining our decision-making process and bolstering our cyber defenses.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 22,
            'user_id'=> 2,
            'review'=> 10,
            'description'=> 'A top-tier choice for security intelligence, highly recommended for safeguarding our digital assets with precision and excellence.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 22,
            'user_id'=> 2,
            'review'=> 8,
            'description'=> 'Delivers invaluable insights consistently, a trusted partner in our security journey, providing unparalleled value.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);
        DB::table('reviews')->insert([
            'item_id'=> 22,
            'user_id'=> 2,
            'review'=> 6,
            'description'=> 'An economical and informative solution for elevating our security posture, aiding our decision-making with precision.',
            'created_at'=> '2023-10-11 12=>34=>56',
            'updated_at'=> '2023-10-11 12=>34=>56'
        ]);

    }
}
