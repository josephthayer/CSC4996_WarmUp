<%-- 
    Document   : testIndex
    Created on : Jan 10, 2018, 4:35:35 PM
    Author     : Joe
--%>
<%@page import="java.sql.*"%>
<% Class.forName("com.mysql.jdbc.Driver");%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"
        <title>JSP Page</title>
    </head>
    <body>
        <% dbManager db = new dbManager(); 
        Connection conn = db.getConnection();
        if(conn == null)
        out.print("connection failed");
        else
        out.print("connection success");
        %>
        <h1>Hello World!</h1>
    </body>
</html>
