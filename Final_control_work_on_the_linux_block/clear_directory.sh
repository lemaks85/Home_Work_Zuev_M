#!/bin/bash

read -p "Input way your directory"

if [ -e @DELDIR ]
        then 
                echo 'the specified directory has been'
                cd $DELDIR
                echo 'Deleting.......'
                rm -v *.bak *.tmp *.backup
                echo 'Deleting done!'
        else
                echo 'The directory not has been!!!'
                exit 2
fi
