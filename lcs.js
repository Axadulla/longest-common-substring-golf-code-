[,,...s]=process.argv;r="";if(s[0]){a=s[0],m=a.length;for(l=m;l;--l)for(i=0;i<=m-l;i++){t=a.slice(i,i+l);if(!s.some(x=>!x.includes(t))){r=t;l=0;break}}}console.log(r)
