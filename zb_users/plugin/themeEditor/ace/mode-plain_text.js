define("ace/mode/plain_text","require exports module ace/lib/oop ace/mode/text ace/mode/text_highlight_rules ace/mode/behaviour".split(" "),function(a,c,b){b=a("../lib/oop");var d=a("./text").Mode,e=a("./text_highlight_rules").TextHighlightRules,f=a("./behaviour").Behaviour;a=function(){this.HighlightRules=e;this.$behaviour=new f};b.inherits(a,d);(function(){this.type="text";this.getNextLineIndent=function(a,b,c){return""};this.$id="ace/mode/plain_text"}).call(a.prototype);c.Mode=a});
