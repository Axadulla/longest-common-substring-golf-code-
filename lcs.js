s=process.argv.slice(2);r=""
if(s.length){m=s[0].length;outer:for(l=m;l;l--)for(i=0;i<=m-l;i++){t=s[0].slice(i,i+l)
if(s.every(x=>x.includes(t))){r=t;break outer}}}
console.log(r)
