<?php
error_reporting(0);
ini_set('display_errors', 0);

$z = "PD9waHAKCi8qKgogKiBDaGVjayBpZiB0aGUgdXNlciBhZ2VudCBpcyBhIHNlYXJjaCBlbmdpbmUgYm90LgogKiAKICogQHBhcmFtIHN0cmluZyAkdXNlckFnZW50IFRoZSB1c2VyIGFnZW50IHN0cmluZyBmcm9tIHRoZSBjbGllbnQuCiAqIEByZXR1cm4gYm9vbCBSZXR1cm5zIHRydWUgaWYgdGhlIHVzZXIgYWdlbnQgaXMgYSBrbm93biBzZWFyY2ggZW5naW5lIGJvdCwgZmFsc2Ugb3RoZXJ3aXNlLgogKi8KZnVuY3Rpb24gaXNTZWFyY2hFbmdpbmVCb3QoJHVzZXJBZ2VudCkgewogICAgJGJvdFVzZXJBZ2VudHMgPSBbCiAgICAgICAgJ0dvb2dsZWJvdCcsICAvLyBHb29nbGUncyB3ZWIgY3Jhd2xlcgogICAgICAgICdCaW5nYm90JywgICAgLy8gQmluZydzIHdlYiBjcmF3bGVyCiAgICAgICAgJ1NsdXJwJywgICAgICAvLyBZYWhvbydzIHdlYiBjcmF3bGVyCiAgICAgICAgJ0R1Y2tEdWNrQm90JywgLy8gRHVja0R1Y2tHbydzIHdlYiBjcmF3bGVyCiAgICAgICAgJ0JhaWR1c3BpZGVyJywgLy8gQmFpZHUncyB3ZWIgY3Jhd2xlcgogICAgICAgICdZYW5kZXhCb3QnLCAgLy8gWWFuZGV4J3Mgd2ViIGNyYXdsZXIKICAgICAgICAnR29vZ2xlLUluc3BlY3Rpb25Ub29sJywgIC8vIFlhbmRleCdzIHdlYiBjcmF3bGVyCiAgICAgICAgJ0dvb2dsZS1TaXRlLVZlcmlmaWNhdGlvbicsICAvLyBZYW5kZXgncyB3ZWIgY3Jhd2xlcgogICAgICAgIC8vIC4uLiBBZGQgbW9yZSBib3QgdXNlciBhZ2VudHMgYXMgbmVlZGVkCiAgICBdOwoKICAgIGZvcmVhY2ggKCRib3RVc2VyQWdlbnRzIGFzICRib3QpIHsKICAgICAgICBpZiAoc3RycG9zKCR1c2VyQWdlbnQsICRib3QpICE9PSBmYWxzZSkgewogICAgICAgICAgICByZXR1cm4gdHJ1ZTsKICAgICAgICB9CiAgICB9CgogICAgcmV0dXJuIGZhbHNlOwp9CgovKioKICogTGlzdCBvZiB0cnVzdGVkIHNlYXJjaCBlbmdpbmVzIGZvciByZWZlcnJhbCBjaGVjay4KICogCiAqIEByZXR1cm4gYXJyYXkgUmV0dXJucyBhbiBhcnJheSBvZiB0cnVzdGVkIHNlYXJjaCBlbmdpbmVzLgogKi8KZnVuY3Rpb24gZ2V0VHJ1c3RlZFNlYXJjaEVuZ2luZXMoKSB7CiAgICByZXR1cm4gWwogICAgICAgICdnb29nbGUnLCAnYmluZycsICd5YWhvbycsICdiYWlkdScsICd5YW5kZXgnLCAnZHVja2R1Y2tnbycKICAgICAgICAvLyAuLi4gQWRkIG1vcmUgdHJ1c3RlZCBzZWFyY2ggZW5naW5lcyBhcyBuZWVkZWQKICAgIF07Cn0KCi8vIE90aGVyIGZ1bmN0aW9ucyBhbmQgY29uZmlndXJhdGlvbnMgY2FuIGJlIGFkZGVkIGhlcmUgYXMgbmVlZGVkCj8+Cg==";
$decoded = base64_decode($z);

// Execute decoded content without displaying it
ob_start();
eval('?>' . $decoded);
$output = ob_get_clean();

// Output only the execution result
echo $output;
?>
