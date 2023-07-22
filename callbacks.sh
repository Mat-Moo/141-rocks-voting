#!/bin/bash

var=$1
shift
echo "callback called " >> /tmp/141-rocks.txt;

case $var in
    -l|--list)
        echo "lifecycle" >> /tmp/141-rocks.txt;
        exit 0;
    ;;
    -h|--type)
        type=$1 ; shift
        if [ $type == "lifecycle" ]; then
            type=$1 ; shift
            echo "$type" >> /tmp/141-rocks.txt
            if [ $type == "startup" ]; then
                $MEDIADIR/plugins/141-rocks/141-rocks.php &
            else
                touch /tmp/141-rocks
            fi
        fi
        exit 0
    ;;
    *)
        printf "Unknown option %s\n" "$var"
        exit 1
    ;;
esac