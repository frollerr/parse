 var height=0;
 if (self.screen) {
 height = screen.height
 }
 else if (self.java) {
 var jkit = java.awt.Toolkit.getDefaultToolkit();
 var scrsize = jkit.getScreenSize();
 height = scrsize.height;
 }
 var new_height=0;
 if (height > 0) {
 new_height=height-420;
 }