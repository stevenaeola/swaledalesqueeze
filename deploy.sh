#!/bin/bash
git add .
git commit
git push origin master
ssh -p 2510 stev6093@www.swaledalesqueeze.org.uk <<EOF
cd public_html
git pull
chmod -R 755 .
EOF
