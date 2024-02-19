#!/bin/bash
echo "Content-type: text/html"
echo ""
echo "<html><head><title>Bash as CGI"
echo "</title></head><body>"

echo "<h1>Start playbook</h1>"
echo "Start  $(ansible-playbook /home/Playbook/web_deploy/vm_deploy_template.yml -vvv)"

echo "</body></html>"
