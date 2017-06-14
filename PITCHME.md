---
## Issue: CRLF copy issues in Firefox

---
## Code in pre
CRLF is preserved in a "pre" element
<pre>
Col A, Col B, Col C
One,Preserve date as MM/DD/YYYY,01/01/2017
Two,Preserve date as YYYY-MM-DD,2017-01-01
Three,Preserve Number with leading zeros,00002222
</pre>
---
## Code inline
CRLF is not preserved in inline code
```
Col A, Col B, Col C
One,Preserve date as MM/DD/YYYY,01/01/2017
Two,Preserve date as YYYY-MM-DD,2017-01-01
Three,Preserve Number with leading zeros,00002222
```
---?code=data.csv
@[1-4](CRLF is not preserved in a code-delimited slide)
---
CRLF is in the source code

https://raw.githubusercontent.com/terrywbrady/tbDemo/gitpitch/data.csv
