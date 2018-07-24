/* Licensed to the Apache Software Foundation (ASF) under one or more
 * contributor license agreements.  See the NOTICE file distributed with
 * this work for additional information regarding copyright ownership.
 * The ASF licenses this file to You under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with
 * the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * @file  ap_config_layout.h
 * @brief Apache Config Layout
 */

#ifndef AP_CONFIG_LAYOUT_H
#define AP_CONFIG_LAYOUT_H

/* Configured Apache directory layout */
#define DEFAULT_PREFIX "/app/.heroku/php/"
#define DEFAULT_EXP_EXEC_PREFIX "/app/.heroku/php/"
#define DEFAULT_REL_EXEC_PREFIX ""
#define DEFAULT_EXP_BINDIR "/app/.heroku/php//bin"
#define DEFAULT_REL_BINDIR "bin"
#define DEFAULT_EXP_SBINDIR "/app/.heroku/php//sbin"
#define DEFAULT_REL_SBINDIR "sbin"
#define DEFAULT_EXP_LIBEXECDIR "/app/.heroku/php//libexec"
#define DEFAULT_REL_LIBEXECDIR "libexec"
#define DEFAULT_EXP_MANDIR "/app/.heroku/php//man"
#define DEFAULT_REL_MANDIR "man"
#define DEFAULT_EXP_SYSCONFDIR "/app/.heroku/php//etc/apache2"
#define DEFAULT_REL_SYSCONFDIR "etc/apache2"
#define DEFAULT_EXP_DATADIR "/app/.heroku/php//share/apache2"
#define DEFAULT_REL_DATADIR "share/apache2"
#define DEFAULT_EXP_INSTALLBUILDDIR "/app/.heroku/php//share/apache2/build"
#define DEFAULT_REL_INSTALLBUILDDIR "share/apache2/build"
#define DEFAULT_EXP_ERRORDIR "/app/.heroku/php//share/apache2/error"
#define DEFAULT_REL_ERRORDIR "share/apache2/error"
#define DEFAULT_EXP_ICONSDIR "/app/.heroku/php//share/apache2/icons"
#define DEFAULT_REL_ICONSDIR "share/apache2/icons"
#define DEFAULT_EXP_HTDOCSDIR "/app/.heroku/php//share/apache2/htdocs"
#define DEFAULT_REL_HTDOCSDIR "share/apache2/htdocs"
#define DEFAULT_EXP_MANUALDIR "/app/.heroku/php//share/apache2/manual"
#define DEFAULT_REL_MANUALDIR "share/apache2/manual"
#define DEFAULT_EXP_CGIDIR "/app/.heroku/php//share/apache2/cgi-bin"
#define DEFAULT_REL_CGIDIR "share/apache2/cgi-bin"
#define DEFAULT_EXP_INCLUDEDIR "/app/.heroku/php//include/apache2"
#define DEFAULT_REL_INCLUDEDIR "include/apache2"
#define DEFAULT_EXP_LOCALSTATEDIR "/app/.heroku/php//var/apache2"
#define DEFAULT_REL_LOCALSTATEDIR "var/apache2"
#define DEFAULT_EXP_RUNTIMEDIR "/app/.heroku/php//var/apache2/run"
#define DEFAULT_REL_RUNTIMEDIR "var/apache2/run"
#define DEFAULT_EXP_LOGFILEDIR "/app/.heroku/php//var/apache2/log"
#define DEFAULT_REL_LOGFILEDIR "var/apache2/log"
#define DEFAULT_EXP_PROXYCACHEDIR "/app/.heroku/php//var/apache2/proxy"
#define DEFAULT_REL_PROXYCACHEDIR "var/apache2/proxy"

#endif /* AP_CONFIG_LAYOUT_H */
