%define _unpackaged_files_terminate_build 0

Name: nethserver-lang
Version: 0.0.1
Release: 1%{?dist}
License: GPLv3
URL: https://github.com/NethServer/nethserver-lang
Summary: NethServer localization project

# This is extracted from the git repo by prep-sources:
Source0: %{name}-%{version}.tar.gz

BuildRequires: gettext
BuildRequires: nethserver-devtools
BuildArch: noarch

%description
NethServer localization project

%prep
%setup

%build

%{makedocs}

for LD in locale/*/LC_MESSAGES; do
   for F in $LD/*.po; do
     msgfmt -v $F -o ${F%%.po}.mo
   done
done

%install

shopt -s nullglob

for D in locale/*; do
   [ -d "${D}" ] || continue
   lang=$(basename ${D})
   if [[ "${lang}" == it || "${lang}" == en ]]; then
      override="Override"
   else
      override=""
   fi
   rm -f ${lang}.lang
   echo "%doc COPYING" >> ${lang}.lang

   LD=$D/LC_MESSAGES
   for F in $LD/*.mo; do
     install -m 0644 -D $F %{buildroot}/%{_datadir}/$F
     echo "%{_datadir}/$F" >> ${lang}.lang
   done

   LD=$D/server-manager
   echo "%dir /usr/share/nethesis/${override:-NethServer}/Language/${lang}" >> ${lang}.lang
   install -d  %{buildroot}/usr/share/nethesis/${override:-NethServer}/Language/${lang}
   for F in $LD/*.php; do
      install -m 0644 -D $F %{buildroot}/usr/share/nethesis/${override:-NethServer}/Language/${lang}/$(basename $F)
      echo "/usr/share/nethesis/${override:-NethServer}/Language/${lang}/$(basename $F)" >> ${lang}.lang
   done

   LD=$D/help
   echo "%dir /usr/share/nethesis/${override:-NethServer}/Help/${lang}" >> ${lang}.lang
   install -d  %{buildroot}/usr/share/nethesis/${override:-NethServer}/Help/${lang}
   for F in $LD/*.html; do
      install -m 0644 -D $F %{buildroot}/usr/share/nethesis/${override:-NethServer}/Help/${lang}/$(basename $F)
      echo "/usr/share/nethesis/${override:-}NethServer/Help/${lang}/$(basename $F)" >> ${lang}.lang
   done

   LD=$D/nethgui
   echo "%dir /usr/share/nethesis/${override:-Nethgui}/Language/${lang}" >> ${lang}.lang
   install -d  %{buildroot}/usr/share/nethesis/${override:-Nethgui}/Language/${lang}
   for F in $LD/*.php; do
       install -m 0644 -D $F %{buildroot}/usr/share/nethesis/${override:-Nethgui}/Language/${lang}/$(basename $F)
       echo "/usr/share/nethesis/${override:-Nethgui}/Language/${lang}/$(basename $F)" >> ${lang}.lang
   done
done

%package it
Summary: Italian support
BuildArch: noarch
%files it -f it.lang
%description it
NethServer Italian language support (it)

%package de
Summary: German support
BuildArch: noarch
%files de -f de.lang
%description de
NethServer German language support (de)

%package el
Summary: Greek support
BuildArch: noarch
%files el -f el.lang
%description el
NethServer Greek language support (el)

%package es
Summary: Spanish support
BuildArch: noarch
%files es -f es.lang
%description es
NethServer Spanish language support (es)

%package fr
Summary: Greek support
BuildArch: noarch
%files fr -f fr.lang
%description fr
NethServer French language support (fr)

%package hu
Summary: Hungarian support
BuildArch: noarch
%files hu -f hu.lang
%description hu
NethServer Hungarian language support (hu)

%package nl
Summary: Dutch support
BuildArch: noarch
%files nl -f nl.lang
%description nl
NethServer Dutch language support (nl)

%package ru
Summary: Russian support
BuildArch: noarch
%files ru -f ru.lang
%description ru
NethServer Russian language support (ru)

%changelog
* Thu Apr 16 2015 Davide Principi <davide.principi@nethesis.it> - 0.0.1-1
- Initial version

