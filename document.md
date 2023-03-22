public -> dùng được ngoài, trong class và class con;
protected -> dùng được trong và class con;
privice -> chỉ dùng được trong class;

set : thì không dùng return;
get: thì dùng return để trả value

Ngoài class truy xuất thông qua đối tượng;
Trong class truy xuất bằng $this;


* Iterface nó không phải là một class và phương thức của nó không nhất thiết phải là public,private,protected.
=> Khi lớp con muốn thừa hưởng của cha phả dùng implements.
=> Trong lớp cha có bao nhiêu phương thức  lớp con  phải dùng hết phương thức đó tuy nhiên không cần this-> phương thức đó.
=> Chỉ khai báo hàm

* Abstract nó là một class và phương thức của nó phải có abstracts.
=> Khi lớp con muốn thừa hưởng của cha phả dùng extends.
=> Trong lớp cha có bao nhiêu phương thức thì bắt buộc lớp con phải có chừng đó phương thức.
=> Khai báo hàm và biến.

$random_number = uniqid();
$timestamp = time();
$id = md5($random_number . $timestamp);