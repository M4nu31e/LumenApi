#!/bin/sh
#
# Build all Charts from subdirectories
#
# IX KR - 17.09.2018
# IX KR - 04.04.2019 - add repo update after push
#

# build all other charts
for d in */ ; do

	# remove slash from directory
        chart=`echo $d | sed s'/.$//'`
	# get verson of helmchart
	version=`cat $d/Chart.yaml |grep version |sed 's/.*: //'`

        if [[ $chart != "common" ]]; then

                echo "Building $chart chart ..."
                helm dependency up ./$chart
                helm package ./$chart
                helm push -f $chart-$version.tgz chartmuseum.customer-virt.eu
        fi

done

# update all repos after push and fetch latest chart infos
helm repo update