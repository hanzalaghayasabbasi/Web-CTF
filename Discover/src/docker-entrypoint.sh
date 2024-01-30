#!/bin/bash
# *~ Author: @hanzalaghayasabbasi

rm -f /flag* /app/flag*
touch flag.txt
echo "bsctf{yOU_hAvE_Discover_ThE_ReCipY_Of_FlAg_cmd_InJEcTiOn}" > flag.txt
mv flag.txt /flag.txt
uvicorn main:app --reload --host "0.0.0.0" --port "8000"

 
